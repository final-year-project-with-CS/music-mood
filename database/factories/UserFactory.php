<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'artist_nickname' => $faker->name,
        'date_of_birth'=>$faker->date,
        'avatar'=>$faker->name,
        'email' => $faker->unique()->safeEmail,
        'nickname' => $faker->userName,
        'date_of_birth' => $faker->dateTime($max = 'now', $timezone = null),
        'organisation_id' => $faker->randomDigit,
        'avatar' => $faker->imageUrl(),
        'uuid' => $faker->uuid,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
<<<<<<< HEAD
        'is_active' => $faker->boolean()
=======
        'isactive'=>$faker->boolean,
>>>>>>> a632c4ff6afe9bd28b1ae27f6d32461a362c82ac
    ];
});
