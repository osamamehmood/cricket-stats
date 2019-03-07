<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $graph = [
            'number_of_runs' => auth()->user()
                ->statistics()
                ->batting()
                ->select('number_of_runs')
                ->get()
                ->transform(function ($statistics) {
                    return $statistics->number_of_runs;
                }),

            // 'number_of_matches' =>
        ];

        return view('users.index', compact('graph'));
    }
}
