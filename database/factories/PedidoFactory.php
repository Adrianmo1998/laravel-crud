<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pedido;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {

    return [
        'Numero' => $faker->randomDigitNotNull,
        'Hora' => $faker->word,
        'Fecha' => $faker->word,
        'Calle' => $faker->word,
        'Estado' => $faker->word,
        'Factura' => $faker->word,
        'Nombre_Cliente' => $faker->word,
        'Telefono_Cliente' => $faker->randomDigitNotNull,
        'Tipo_entrega' => $faker->word,
        'Detalle' => $faker->word,
        'Total' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
