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
                                <th scope="col">Number Of Runs</th>
                                <th scope="col">Number of Bowls Faced</th>
                                <th scope="col">Number of 4s</th>
                                <th scope="col">Number of 6s</th>
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

                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
