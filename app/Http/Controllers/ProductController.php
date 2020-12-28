<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Color;
use App\Models\Category;
use App\Models\Brand;

class ProductController extends Controller
{
    public function products()
    {
    	$products = Product::all();
    	$colors = Color::all();
    	$categories = Category::all();
    	$brands = Brand::all();
    	//dd($brands);
    	return view('admin/product',compact('products','colors','categories','brands'));
    }

    public function add_product(Request $request)
    {
    	$product = new Product();
    	$product->name_ar = $request->get('category_name_arabic');
    	$product->name_en = $request->get('category_name_english');
    	$product->save();
    	return back();
    }

    public function edit_product_page($category_id)
    {
    	$categories = Category::all();
    	$category = Category::find($category_id);
    	return view('admin/category',compact('category','categories'));
    }

    public function update_product(Request $request,$category_id)
    {
    	$category = Category::find($category_id);
    	$category->name_ar = $request->get('category_name_arabic');
    	$category->name_en = $request->get('category_name_english');
    	$category->save();
    	return redirect()->route('categories');
    }

    public function delete_product($category_id)
    {
    	$brand = Category::find($category_id);
    	$brand->delete();
    	return back();
    }
}
