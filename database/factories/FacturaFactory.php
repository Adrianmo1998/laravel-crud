<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Factura;
use Faker\Generator as Faker;

$factory->define(Factura::class, function (Faker $faker) {

    return [
        'Fecha' => $faker->word,
        'Numero' => $faker->word,
        'Estado' => $faker->word,
        'Detalle' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
