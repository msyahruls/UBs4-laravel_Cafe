<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listCategory = [
            'Beverages',
            'Breakfast',
            'Sandwiches',
            'Soups & Salads'
        ];

        foreach ($listCategory as $category) {
        	Category::create(['category_name' => $category]);
        }
    }
}
