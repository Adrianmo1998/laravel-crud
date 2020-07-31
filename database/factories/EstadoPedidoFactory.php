<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EstadoPedido;
use Faker\Generator as Faker;

$factory->define(EstadoPedido::class, function (Faker $faker) {

    return [
        'Nombre' => $faker->word,
        'Descripcion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
