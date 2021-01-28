<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {
    return [
      'name' => $faker -> streetName,
      'address' => $faker -> streetAddress,
      'n_employees' => rand(1,100),
    ];
});
