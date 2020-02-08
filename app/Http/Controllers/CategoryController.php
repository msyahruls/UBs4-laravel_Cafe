<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    	// $category = Category::all();
    	// return view('category.index')->with('categories', $category);

    	$categories = Category::orderBy('category_name','asc')->paginate(10);
        return view('category.index',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
    	return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);
  
        Category::create($request->all());
   
        return redirect()->route('category.index')
                        ->with('success','Category created successfully.');
    }

    public function show(Category $category)
    {
        // print($category);
        return view('category.show',compact('category'));
    }

    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required',
        ]);
  
        $category->update($request->all());
  
        return redirect()->route('category.index')
                        ->with('success','Category updated successfully');
    }

	public function destroy(Category $category)
    {
        $category->delete();
  
        return redirect()->route('category.index')
                        ->with('success','Category deleted successfully');
    }
}
