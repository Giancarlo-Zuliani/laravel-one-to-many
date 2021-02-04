<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'lastname' => $faker -> word,
        'date_of_birth' => $faker -> date,
    ];
});
