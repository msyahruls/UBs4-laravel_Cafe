<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
// use DB;
// use Validator;

class ProductController extends Controller
{
    public function index()
    {
    	// $product = Product::all();
    	// return view('product.index')->with('products', $product);

    	$products = Product::orderBy('category','asc')->paginate(10);
        return view('product.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function indexUser()
    {
    	$products = Product::all()->sortBy('category');
        return view('productUser.index')->with('products', $products);
    }

    public function create()
    {
    	return view('product.create');
    }

	public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
        ]);
  
        Product::create($request->all());
   
        return redirect()->route('product.index')
                        ->with('success','Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
        ]);
  
        $product->update($request->all());
  
        return redirect()->route('product.index')
                        ->with('success','Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
  
        return redirect()->route('product.index')
                        ->with('success','Product deleted successfully');
    }
}
