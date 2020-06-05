<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listProduct = [
			['product_category' => '1', 'product_name' => 'Coffe',		'product_image' => 'vGRhJpHLo7JLyQ7w7W4Z.jpg', 'product_price' => '4',],
			['product_category' => '1', 'product_name' => 'Espresso',	'product_image' => 'rXCiCYuQS0s6DayTvmCr.jpg', 'product_price' => '3',],
			['product_category' => '1', 'product_name' => 'Tea',		'product_image' => 'D4LPP0EVHaj418cgct3E.jpg', 'product_price' => '4', ],
			['product_category' => '1', 'product_name' => 'Milk',		'product_image' => 'PVYMxVHLoiFjuqrfy5xb.jpg', 'product_price' => '2', ],

			['product_category' => '2', 'product_name' => 'Breakfast Pizza',		'product_image' => 'SQnxpFANsLQcrAzmbTkG.jpg', 'product_price' => '13',],
			['product_category' => '2', 'product_name' => 'French Toast Panini',	'product_image' => '9JyuqBrqMtjpRWzvfWNI.jpg', 'product_price' => '11',],
			['product_category' => '2', 'product_name' => 'Smoked Salmon Platter',	'product_image' => 'ifZLhqtXnkKE83SbAiz0.jpg', 'product_price' => '12', ],
			['product_category' => '2', 'product_name' => 'Yogurt',					'product_image' => '70kFvKPTbSgttyWIrW4e.jpg', 'product_price' => '6', ],

			['product_category' => '3', 'product_name' => 'Roasted Turkey Breast',			'product_image' => 'ra5O90jMNv7YQWI9sr6k.jpg', 'product_price' => '10',],
			['product_category' => '3', 'product_name' => 'Roast Beef & Horseradish Cream',	'product_image' => 'YU8xLz7oMjKU4ttHevDV.jpg', 'product_price' => '10',],
			['product_category' => '3', 'product_name' => 'Ham and Swiss Cheese',			'product_image' => 'eKJQsevjf433TOSoGkfg.jpg', 'product_price' => '10', ],
			['product_category' => '3', 'product_name' => 'Curried Chicken Salad',			'product_image' => 'CzRWzYFYLXfC5kS3ehkx.jpg', 'product_price' => '10', ],

			['product_category' => '4', 'product_name' => 'Creamy Tomato Soup',					'product_image' => 'tNXoOt3Bsx4tOYNXU5XI.jpg', 'product_price' => '7',],
			['product_category' => '4', 'product_name' => 'Baby Green Salad',					'product_image' => 'au6f5XBgs9dpsHbnORtO.jpg', 'product_price' => '6',],
			['product_category' => '4', 'product_name' => 'Chopped Salad',						'product_image' => 'lAxcbcMlKlvjhYHvT9TE.jpg', 'product_price' => '12', ],
			['product_category' => '4', 'product_name' => 'Chicken Papaya Salad',				'product_image' => 'QDwJDhJszASJrrUcxoTF.jpg', 'product_price' => '12', ]
        ];

        foreach ($listProduct as $product) {
            Product::create($product);
        }
    }
}
