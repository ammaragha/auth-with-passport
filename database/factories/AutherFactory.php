<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Auther;
use Faker\Generator as Faker;

$factory->define(Auther::class, function (Faker $faker) {
    return [
        'name'=> $faker->name(),
    ];
});
