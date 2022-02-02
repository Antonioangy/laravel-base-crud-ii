<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comic;
use Faker\Generator as Faker;

$factory->define(Comic::class, function (Faker $faker) {
    return [

        'title' => $faker -> name(),
        'author' => $faker -> name(),
        'release_date' => $faker -> date(),
        'count' => $faker -> numberBetween(50, 500),

    ];
});
