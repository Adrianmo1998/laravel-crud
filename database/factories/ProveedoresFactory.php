<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Proveedores;
use Faker\Generator as Faker;

$factory->define(Proveedores::class, function (Faker $faker) {

    return [
        'Nombre' => $faker->word,
        'Apellidos' => $faker->word,
        'Ubicacion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
