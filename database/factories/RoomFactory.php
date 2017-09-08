<?php

use Faker\Generator as Faker;

$factory->define('Examination\Room', function (Faker $faker) {
    return [
        'number' => $faker->bothify('#?##??'),
        'strength' => $faker->numberBetween($min = 20, $max = 80)
    ];
});
