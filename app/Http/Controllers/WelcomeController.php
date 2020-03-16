<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::when($request->search, function($query) use($request){
            $query->where('category_name', 'LIKE', '%'.$request->search.'%');})
            ->orderBy('category_name','asc')->get();
        $products = Product::all();
        return view('index',compact('categories','products'));
    }

    public function menu(Request $request)
    {
        $categories = Category::when($request->search, function($query) use($request){
            $query->where('category_name', 'LIKE', '%'.$request->search.'%');})
            ->orderBy('category_name','asc')->get();
        return view('menu',compact('categories'));
    }
}
