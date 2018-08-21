<?php

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {
    return [
        'round_id' => 1,
        'venue' => $faker->streetName,
        'played_at' => now(),
        'round' => 1, // Relationship
        'notes' => $faker->paragraphs(3, true)
    ];
});
