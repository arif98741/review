<?php


use App\Models\Company;
use App\Models\Review;
use App\Models\Reviewer;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'title' => ucfirst($faker->text(30)),
        'review_text' => $faker->text(100),
        'reviwer_id' => Reviewer::all()->random(),
        'company_id' => Company::all()->random(),
        'image'        => $faker->text(10) . $faker->randomElement(['.jpg', '.png', '.jpeg'])
    ];
});
