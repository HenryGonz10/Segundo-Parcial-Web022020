<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'Producto' => $faker->randomLetter,
        'Descripcion' => $faker->sentence,
        'Monto' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 500)
    ];
});
