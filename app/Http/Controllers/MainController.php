<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Models\Category;

class MainController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('index',compact('categories'));
    }
    
    public function about()
    {
    	return  view('about-us');
    }

    public function language($lang)
    {
    	App::setLocale($lang);
        session()->put('locale', $lang);
        return redirect()->back();

    }



}
