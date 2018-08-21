<?php

use App\Statistic;
use Faker\Generator as Faker;

$factory->define(Statistic::class, function (Faker $faker) {
    return [
        'user_id' => 1,
    ];
});

$factory->state(Statistic::class, 'batting', function (Faker $faker) {
    return [
        'user_id' => 1,
        'type' => 'batting',
        'number_of_runs' => rand(0, 100),
        'number_of_bowls_faced' => rand(1, 95),
        'number_of_4s' => rand(0, 5),
        'number_of_6s' => rand(0, 5),
    ];
});


$factory->state(Statistic::class, 'bowling', function (Faker $faker) {
    return [
        'user_id' => 1,
        'type' => 'bowling',
        'overs_bowled' => rand(0, 10),
        'maiden_overs' => rand(0, 10),
        'runs_conceded' => rand(0, 200),
        'wickets_taken' => rand(0, 10),
        'wides_bowled' => rand(0, 50),
        'no_balls_bowled' => rand(0, 5),
    ];
});
