<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Organization;
use Faker\Generator as Faker;

$factory->define(Organization::class, function (Faker $faker) {
    return [
        'location' => $faker->country,
        'email' => $faker->email,
        'phone_no' => $faker->phoneNumber,
        'address' => $faker->address,
        'description' => $faker->company
    ];
});
