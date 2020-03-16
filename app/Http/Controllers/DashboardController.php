<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use PDF;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
    	$categories = Category::when($request->search, function($query) use($request){
            $query->where('category_name', 'LIKE', '%'.$request->search.'%');})
            ->orderBy('category_name','asc')->get();
        $products = Product::all();
        return view('dashboard.index',compact('categories','products'));
    }

    public function export()
    {
    	$categories = Category::orderBy('category_name','asc')->get();
    	$pdf = PDF::loadview('dashboard.export',compact('categories'));
    	return $pdf->download('Report');
    }
}
