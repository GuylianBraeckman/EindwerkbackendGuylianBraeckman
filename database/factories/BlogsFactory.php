<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Blog::class, function (Faker $faker) {
    $blog = \App\Blog::pluck('id')->toArray();
    return [
        //
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'content'=>$faker->paragraph(),
        'photo_id' =>$faker->numberBetween($min = 1, $max = 6),


    ];
});
