<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Attendance;
use Faker\Generator as Faker;

$factory->define(App\Attendance::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'body' => $faker->sentence,
    ];
});
