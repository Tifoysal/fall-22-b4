<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        //select * from products  order by id desc limit 5
        $categories=Category::all();
        $products=Product::orderBy('price','asc')->take(5)->get();
//        dd($products);
        return view('frontend.pages.home',compact('categories','products'));
    }
}
