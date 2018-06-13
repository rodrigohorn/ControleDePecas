<?php

use Faker\Generator as Faker;

$factory->define(Chat\Message::class, function (Faker $faker) {
    return [
        'user_id' => \Chat\User::all()->random()->id,
        'text' => $faker->sentence(10),
    ];
});
