<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\pt::class, function (Faker $faker) {
    return[

        'nama_kampus' => $faker->unique()->name,
        'singkatan' => $faker->unique()->name,
        'kota' => $faker->name
        //
    ];
});
