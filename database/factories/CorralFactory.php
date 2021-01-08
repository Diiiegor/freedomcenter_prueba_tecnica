<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
Use App\Corral;
use Faker\Generator as Faker;

$factory->define(Corral::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'capacidad_maxima'=>$faker->numberBetween(1,100)
    ];
});
