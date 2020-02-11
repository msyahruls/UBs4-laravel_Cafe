<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
    	'product_name' => $faker->company,
    	'product_category' => $faker->numberBetween($min=1, $max=10),
        'product_image' => $faker->picsum('public/images', 400, 400, false)
        // 'product_image' => $faker->image('public/images',300,300, 'cats', false)
        // picsum($dir = null, $width = 640, $height = 480, $fullPath = true, $id = null, $randomize = true, $gray = false, $blur = null)

    ];
});
