<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title'         => rtrim($faker->sentence(rand(5, 10)), "."),
        'body'          => $faker->paragraphs(rand(3, 7), true),
        'cover_image'   => $faker->imageUrl($width = 640, $height = 480)
    ];
});