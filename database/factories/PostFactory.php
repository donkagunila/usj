<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Usajili\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => factory(Usajili\User::class),
        'body' => $faker->sentence
    ];
});
