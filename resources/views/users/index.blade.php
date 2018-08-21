@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Stats</h1>

                <div class="card mb-4">
                  <div class="card-body">
                    <h2>Batting</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Runs</th>
                                <th scope="col">Balls Faced</th>
                                <th scope="col">4s</th>
                                <th scope="col">6s</th>
                                <th scope="col">SR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(auth()->user()->statistics()->batting()->get() as $batting)
                            <tr>
                                <th>{{ $batting->number_of_runs }}</th>
                                <th>{{ $batting->number_of_bowls_faced }}</th>
                                <th>{{ $batting->number_of_4s }}</th>
                                <th>{{ $batting->number_of_6s }}</th>
                                <th>{{ $batting->batting_strike_rate }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>

                <div class="card mb-4">
                  <div class="card-body">
                    <h2>Bowling</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Overs</th>
                                <th scope="col">Maidens</th>
                                <th scope="col">Runs</th>
                                <th scope="col">Wickets</th>
                                <th scope="col">Wides</th>
                                <th scope="col">No Balls</th>
                                <th scope="col">Bowling SR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(auth()->user()->statistics()->bowling()->get() as $bowling)
                            <tr>
                                <th>{{ $bowling->overs_bowled }}</th>
                                <th>{{ $bowling->maiden_overs }}</th>
                                <th>{{ $bowling->runs_conceded }}</th>
                                <th>{{ $bowling->wickets_taken }}</th>
                                <th>{{ $bowling->wides_bowled }}</th>
                                <th>{{ $bowling->no_balls_bowled }}</th>
                                <th>{{ $bowling->bowling_strike_rate }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div id="battingGraph" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.src.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script>
$(function() {
Highcharts.chart('battingGraph', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Batting Graph'
    },
    subtitle: {
        text: 'Source: My Balls'
    },
    xAxis: {
        categories: [{{ $graph['number_of_runs'] }}],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Number of Runs'
        }
    },
    xAxis: {
        min: 0,
        title: {
            text: 'Number of Matches'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Batting Graph',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
    }]
});
});
</script>
@endsection
