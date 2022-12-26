<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
       return view('backend.pages.product-list');
    }

    public function createProduct()
    {
        $categories=Category::all();
        return view('backend.pages.product.create',compact('categories'));
    }
}
