<?php

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {
    static $round = 1;

    return [
        'round_id' => $round++,
        'venue' => $faker->streetName,
        'played_at' => now(),
        'notes' => $faker->paragraphs(3, true)
    ];
});
