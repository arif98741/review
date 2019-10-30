<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
     return [
        'company_name' => $faker->company,
        'description' => $faker->text(50),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'website' => 'www.'.$faker->domainName,
        'password' =>  Hash::make('123456'),
        'phone' => $faker->phoneNumber,
        'image' => $faker->text(10).$faker->randomElement(['.jpg','.PNG','.jpeg','.gif']),
        'address' => $faker->address
    ];
});

