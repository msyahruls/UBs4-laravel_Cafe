<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
    	'product_name' => $faker->company,
    	'product_category' => $faker->numberBetween($min=1, $max=10),
        'product_image' => $faker->picsum('public/images', 400, 400, false),
        'product_category' => $faker->numberBetween($min=10000, $max=80000),
    ];
});
