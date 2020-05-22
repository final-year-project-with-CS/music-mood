<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'time' => $faker->dateTime($max = 'now',$timezone=null),
        'artist_id' => $faker->randomDigit,
        'album_id' => $faker->randomDigit,
        'genre' => $faker->creditCardType,
        'play_count' => $faker->randomDigit

    ];
});
