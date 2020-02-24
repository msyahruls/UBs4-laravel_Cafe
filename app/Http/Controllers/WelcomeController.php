<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
    	$products = Product::join('category', 'category.category_id', '=', 'product.product_category')
            ->orderBy('category_name','asc')->get(); 
            // ->orderBy('product_category','asc')->paginate(10);
            // ->sortBy('product_category');
     //    // return view('index')->withProducts($products);
     //    return view('index',compact('products'))
     //        ->with('i', (request()->input('page', 1) - 1) * 10);
     return view('coffee',compact('products'));
    }

    // public function index(Request $request)
    // {
    //     // $product = Product::all();
    //     // return view('product.index')->with('products', $product);
        
    //     $products = Product::when($request->search, function($query) use($request){
    //         $query->where('product_name', 'LIKE', '%'.$request->search.'%');})
    //         ->join('category', 'category.category_id', '=', 'product.product_category')
    //         ->orderBy('category_name','asc')->paginate(10); 

    //     // $products = Product::join('category', 'category.category_id', '=', 'product.product_category')
    //  //        ->orderBy('product_category','asc')->paginate(5);
    //     return view('product.index',compact('products'))
    //         ->with('i', (request()->input('page', 1) - 1) * 10);
    // }
}
