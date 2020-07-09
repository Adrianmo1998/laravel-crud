<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Empleados;
use Faker\Generator as Faker;

$factory->define(Empleados::class, function (Faker $faker) {

    return [
        'Nombre' => $faker->word,
        'Apellido_Paterno' => $faker->word,
        'Edad' => $faker->randomDigitNotNull,
        'Correo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
