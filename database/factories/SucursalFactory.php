<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sucursal;
use Faker\Generator as Faker;

$factory->define(Sucursal::class, function (Faker $faker) {

    return [
        'Nombre' => $faker->word,
        'Direccion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
