<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
      "name" => $faker -> company,
      "logo" => $faker -> url,
      "n_offices" => rand(1, 10),
    ];
});
