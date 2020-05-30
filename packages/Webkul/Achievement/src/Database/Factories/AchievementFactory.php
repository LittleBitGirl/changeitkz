<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Webkul\Achievement\Models\Achievement;

$factory->define(Achievement::class, function (Faker $faker) {
    $now = date("Y-m-d H:i:s");
    
    return [
        'created_at'          => $now,
        'updated_at'          => $now
    ];
});

$factory->state(Achievement::class, 'point', [
    'type' => 'point',
]);

$factory->state(Achievement::class, 'number', [
    'type' => 'number',
]);
