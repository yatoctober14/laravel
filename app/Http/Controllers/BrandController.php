<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

class BrandController extends Controller
{
    public function brands()
    {
    	$brands = Brand::all();
    	//dd($brands);
    	return view('admin/brand',compact('brands'));
    }

    public function add_brand(Request $request)
    {
    	$brand = new Brand();
    	$user->specialize_id  = 0;
    	$brand->name_ar = $request->get('brand_name_arabic');
    	$brand->name_en = $request->get('brand_name_english');
    	$brand->save();
    	return back();
    }

    public function edit_brand_page($brand_id)
    {
    	$brands = Brand::all();
    	$brand = Brand::find($brand_id);
    	return view('admin/brand',compact('brand','brands'));
    }
}
