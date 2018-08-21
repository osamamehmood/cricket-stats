<?php

use App\Grade;
use Faker\Generator as Faker;

$factory->define(Grade::class, function (Faker $faker) {
    return [
        'name' => $faker->numerify('Grade ###'),
        'season' => 'summer'
    ];
});
