<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'time' => $faker->randomDigit,
        'artist' => $faker->name,
        'album' => $faker->word,
        'genre' => $faker->name,
        'plays' => $faker->randomDigit

    ];
});