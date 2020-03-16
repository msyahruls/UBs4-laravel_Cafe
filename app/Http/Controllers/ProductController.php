<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Exports\ProductExport;
use App\Http\Controllers\Controller;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{    
    public function index(Request $request)
    {        
        $products = Product::when($request->search, function($query) use($request){
            $query->where('product_name', 'LIKE', '%'.$request->search.'%');})
            ->join('category', 'category.category_id', '=', 'product.product_category')
            ->orderBy('category_name','asc')->paginate(10); 
        return view('product.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $category = Category::all();
        return view('product.create')->with('categories', $category);
    }

	public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'category'  => 'required',
            'price'      => 'required',
            'image'     => 'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'product_name'       =>   $request->name,
            'product_category'   =>   $request->category,
            'product_price'       =>   $request->price,
            'product_image'      =>   $new_name
        );
  
        Product::create($form_data);
   
        return redirect()->route('product.index')
                        ->with('success','Data Added successfully');
    }

    public function show(Product $product)
    {
        $category = Product::with('category')
            ->where('product.product_id', '=', $product->product_id)->get();
        return view('product.show',compact('product'))->with('categories', $category);
    }

    public function edit(Product $product)
    {
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
                'price'      =>  'required',
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
                'price'  =>  'required',
                'category'  =>  'required',
            ]);
        }

        $form_data = array(
            'product_name'      =>  $request->name,
            'product_category'  =>  $request->category,
            'product_price'     =>  $request->price,
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

    public function export()
    {
        return Excel::download(new ProductExport, 'Products.xlsx');
    }
}
