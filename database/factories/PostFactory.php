<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'lead' => $faker->sentence,
        'body' => $faker->text(),
        'image_path' => 'news\March2020\8uRY28KZ3gj91IGgOTOk.jpg'
    ];
});
