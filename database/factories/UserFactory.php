<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('parola'),
		'remember_token' => str_random(10),
		'type' => User::DEFAULT_TYPE,
    ];
});

$factory->state(User::class, 'admin', [
    'type' => User::ADMIN_TYPE,
]);
