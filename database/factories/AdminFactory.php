<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'is_super' => false,
        'job_title' => $faker->jobTitle,
        'phone' => $faker->unique()->e164PhoneNumber,  
    ];
});
