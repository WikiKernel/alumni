<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'is_resolved' => 'false',
        'deleted' => 'false',
        'title' => $faker->text(255),
        'body' => $faker->text(600),
        'has_answer' => 'false',
        'has_project' => 'false',
    ];
});
