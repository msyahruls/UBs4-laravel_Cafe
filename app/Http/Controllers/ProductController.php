<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
// use DB;
// use Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
    	// $product = Product::all();
    	// return view('product.index')->with('products', $product);
        
        $products = Product::when($request->search, function($query) use($request){
            $query->where('product_name', 'LIKE', '%'.$request->search.'%');})
            ->join('category', 'category.category_id', '=', 'product.product_category')
            ->orderBy('product_category','asc')->paginate(10); 

    	// $products = Product::join('category', 'category.category_id', '=', 'product.product_category')
     //        ->orderBy('product_category','asc')->paginate(5);
        return view('product.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function indexUser()
    {
    	$products = Product::join('category', 'category.category_id', '=', 'product.product_category')->get();
            // ->orderBy('product_category','asc')->paginate(10);
            // ->sortBy('product_category');
        // return view('index')->withProducts($products);
        return view('index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        if($search != ""){
        $products = Product::join('category', 'category.category_id', '=', 'product.product_category')
            ->where ( 'product_name', 'LIKE', '%' . $search . '%' )->paginate (5)->setPath ( '' );
        $pagination = $products->appends ( array ('search' => $request->search ) );
        if (count ( $products ) > 0)
            return view ( 'product.index' )->withDetails ( $products )->withQuery ( $search )->with('i', (request()->input('page', 1) - 1) * 5);
        }
            // print('No Details found. Try to search again !');
            return view ( 'product.index' )->withMessages ( 'No Details found. Try to search again !' );
    }

    public function create()
    {
        $category = Category::all();
        return view('product.create')->with('categories', $category);
    	// return view('product.create');
    }

	public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'category'  => 'required',
            'image'     => 'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'product_name'       =>   $request->name,
            'product_category'   =>   $request->category,
            'product_image'      =>   $new_name
        );
  
        Product::create($form_data);
   
        return redirect()->route('product.index')
                        ->with('success','Data Added successfully');
    }

    public function show(Product $product)
    {
        // $product
        $category = Product::with('category')
            ->where('product.product_id', '=', $product->product_category)->get();
        // print($product);
        // print($category);
        return view('product.show',compact('product'))->with('categories', $category);
    }

    public function edit(Product $product)
    {
        // print($product);
        $category = Category::all();
        return view('product.edit',compact('product'))->with('categories', $category);
    }

    public function update(Request $request, Product $product)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != ''){
            $request->validate([
                'name'      =>  'required',
                'category'  =>  'required',
                'image'     =>  'image|max:2048'
            ]);

            $image_path = "images/".$image_name;  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }else{
            $request->validate([
                'name'      =>  'required',
                'category'  =>  'required'
            ]);
        }

        $form_data = array(
            'product_name'      =>  $request->name,
            'product_category'  =>  $request->category,
            'product_image'     =>  $image_name
        );

        $product->update($form_data);
  
        return redirect()->route('product.index')
                        ->with('success','Data is successfully updated');
    }

    public function destroy(Product $product)
    {
        $image_path = "images/".$product->image;  // Value is not URL but directory file path
        print($image_path);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $product->delete();
  
        return redirect()->route('product.index')
                        ->with('success','Data is successfully deleted');
    }
}
