<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'cod' => rand(1,3),
        'name' => $faker->text(20),
        'city_id' => rand(1,20),
    ];
});
