<?php

use Faker\Generator as Faker;

$factory->define(
    App\Admin::class,
    function (Faker $faker) {
        return [
            'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
            'nickname' => $faker->name,
            'password' => bcrypt('q20031120'), // secret
            'remember_token' => str_random(10),
        ];
    }
);
