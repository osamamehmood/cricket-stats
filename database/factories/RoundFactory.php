<?php

use App\Round;
use Faker\Generator as Faker;

$factory->define(Round::class, function (Faker $faker) {
    static $number = 1;

    return [
        'grade_id' => 1,
        'number' => $number++
    ];
});
