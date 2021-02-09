<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => $faker -> word(),
        'description' => $faker -> sentence(2),
        'priority' => rand(1,5)
    ];
});
