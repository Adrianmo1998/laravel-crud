<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DetallePedido;
use Faker\Generator as Faker;

$factory->define(DetallePedido::class, function (Faker $faker) {

    return [
        'Cantidad' => $faker->word,
        'EstadoPedido' => $faker->word,
        'Gas' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
