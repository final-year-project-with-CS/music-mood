<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'genre' => $faker->creditCardType,
        'artist_id' => $faker->randomDigit,
        'cover' => $faker->jobTitle,
        'path_to_storage' => $faker->title
    ];
});
