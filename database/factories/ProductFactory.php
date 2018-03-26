<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'release_year' => $faker->year(),
        'usd_price' => $faker->numberBetween(100,1000000),
        'created_at' => Carbon::now()
    ];
});
