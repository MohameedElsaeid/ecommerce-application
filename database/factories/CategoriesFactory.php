<?php

/** @var Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;


$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'description' => $faker->text(200),
        'image' => $faker->image()
    ];
});
