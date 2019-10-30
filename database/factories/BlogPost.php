<?php


use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\BlogPost;
use App\Models\BlogCategory;

$factory->define(BlogPost::class, function (Faker $faker) {
    return [
        'title' => ucfirst($faker->text(20)),
        'description' => $faker->text(100),
        'slug' =>  Str::slug($faker->text(20), '-'),
        'blog_category_id' => BlogCategory::all()->random(),
        'image'        => $faker->text(10) . $faker->randomElement(['.jpg', '.png', '.jpeg'])
    ];
});