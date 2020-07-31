<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EnvioPedido;
use Faker\Generator as Faker;

$factory->define(EnvioPedido::class, function (Faker $faker) {

    return [
        'Estado' => $faker->word,
        'Numero' => $faker->word,
        'Descripcion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
