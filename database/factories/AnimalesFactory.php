<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Animal;

$factory->define(Animal::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'corral_id' => $faker->numberBetween(1, 10),
        'id_tipo_animal' => 1
    ];
});
