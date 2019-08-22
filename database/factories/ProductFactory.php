<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Provider\it_IT\Person;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'description' => $faker->sentence(12, true),
        'SKU' => FakerPerson::taxId(),
        'prise' => $faker->randomFloat(2, 5, 200),
        'in_stock' => $faker->numberBetween(0, 15),
        'thumbnail' => $faker->image('public/storage/images/product'),
        'short_description' =>$faker->sentence(2, true),
    ];
});
