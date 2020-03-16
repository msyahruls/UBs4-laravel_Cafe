<?php

namespace App\Http\Controllers;

use App\Category;
use App\Exports\CategoryExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::when($request->search, function($query) use($request){
            $query->where('category_name', 'LIKE', '%'.$request->search.'%');})
            ->orderBy('category_name','asc')->paginate(10); 

        return view('category.index',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
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

    public function export()
    {
        return Excel::download(new CategoryExport, 'Categories.xlsx');
    }
}
