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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(auth()->user()->statistics()->batting()->get() as $batting)
                            <tr>
                                <th>{{ $batting->number_of_runs }}</th>
                                <th>{{ $batting->number_of_bowls_faced }}</th>
                                <th>{{ $batting->number_of_4s }}</th>
                                <th>{{ $batting->number_of_6s }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>

                <div class="card">
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(auth()->user()->statistics()->Bowling()->get() as $bowling)
                            <tr>
                                <th>{{ $batting->overs_bowled }}</th>
                                <th>{{ $batting->maiden_overs }}</th>
                                <th>{{ $batting->runs_conceded }}</th>
                                <th>{{ $batting->wickets_taken }}</th>
                                <th>{{ $batting->wides_bowled }}</th>
                                <th>{{ $batting->no_balls_bowled }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
