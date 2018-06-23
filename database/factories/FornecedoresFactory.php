<?php

use Faker\Generator as Faker;

$factory->define(Chat\Fornecedor::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'cidade' => $faker->name,
        'endereco' => $faker->name,
        'contato' => $faker->name

    ];
});
