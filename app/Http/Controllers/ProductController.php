<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function index()
    {
    	$product = Product::all();
    	return view('product.index')->with('items', $product);
    	// $products = Product::latest()->paginate(5);
     //    return view('index',compact('items'))
     //        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
