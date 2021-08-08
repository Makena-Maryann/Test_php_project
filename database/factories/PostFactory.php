<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\Models\User::class),
        'slug' => $faker->sentence,
        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});
