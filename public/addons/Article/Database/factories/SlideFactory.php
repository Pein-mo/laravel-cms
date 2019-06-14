<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Article\Entities\Slide::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'url' => 'http://www.houdunren.com',
        'pic' => 'http://laravel.mo1120.com/uploads/2019-06-14/ntEbtpgP.jpg',
        'click' => mt_rand(1, 1111),
        'enable' => 1,
    ];
});
