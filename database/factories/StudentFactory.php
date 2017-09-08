<?php

use Faker\Generator as Faker;

$factory->define('Examination\Student', function (Faker $faker) {
    return [
        'name' => $faker->firstName
    ];
});
