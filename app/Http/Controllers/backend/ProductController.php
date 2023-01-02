<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products=Product::with('categoryRelation')->paginate(5);
//dd($products);
       return view('backend.pages.product-list',compact('products'));
    }

    public function createProduct()
    {
        $categories=Category::all();
        return view('backend.pages.product.create',compact('categories'));
    }

    public function store(Request $request)
    {
        //migration column name=>input field name
    Product::create([
       'name'=>$request->product_name,
       'price'=>$request->price,
       'quantity'=>$request->quantity,
       'details'=>$request->details,
       'category_id'=>$request->category_id,
    ]);
    //insert into products () value ()

        return redirect()->back()->with('message','Product Created Successfully.');

    }
}
