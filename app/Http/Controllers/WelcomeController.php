<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
    	$products = Product::join('category', 'category.category_id', '=', 'product.product_category')->get();
            // ->orderBy('product_category','asc')->paginate(10);
            // ->sortBy('product_category');
        // return view('index')->withProducts($products);
        return view('index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
