<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reviewer;
use Faker\Generator as Faker;

$factory->define(Reviewer::class, function (Faker $faker) {
    return [
       
        'fullname' => $faker->firstName.''.$faker->lastName,
        'title' => ucfirst($faker->text(100)),
        'email' => $faker->safeEmail,
        'password' =>  Hash::make('123456'),
        'city' => $faker->city,
        'country' => $faker->country,
        'image' => $faker->text(10).$faker->randomElement(['.jpg','.PNG','.jpeg','.gif']),
    ];
});

