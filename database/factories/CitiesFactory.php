<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Cities::class, function (Faker $faker) {
    return [
        'cod' => rand(1,3),
        'name' => $faker->text(10),
    ];
});
