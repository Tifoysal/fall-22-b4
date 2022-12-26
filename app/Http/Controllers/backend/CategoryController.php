<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        $categories=Category::all();

       return view('backend.pages.category-list',compact('categories'));
    }

    public function createForm()
    {
       return view('backend.pages.category.create');
    }

    public function submit(Request $request)
    {
//        dd($request->all());
//$a = 4;

        //table er column name => input field er nam
        Category::create([
            'name'=>$request->category_name,
            'status'=>$request->status,
            'description'=>$request->description
        ]);


        return redirect()->back();



    }
}
