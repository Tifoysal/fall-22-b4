<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function register(Request $request)
    {
//            $request->validate([
//                'customer_name'=>'required',
//                'customer_email'=>'required|email|unique:users,email',
//                'customer_password'=>'required|min:5',
//            ]);

        $validations=Validator::make($request->all(),[
                'customer_name'=>'required',
                'customer_email'=>'required|email|unique:users,email',
                'customer_password'=>'required|min:5',
        ]);

        if($validations->fails())
        {
            notify()->error($validations->getMessageBag());
            return redirect()->back();
        }

            User::create([
               'name'=>$request->customer_name,
               'email'=>$request->customer_email,
               'password'=>bcrypt($request->customer_password),
            ]);
            notify()->success('User Created Successfully.');
            return redirect()->back();
    }

    public function login(Request $request)
    {
        $validations=Validator::make($request->all(),[
            'customer_email'=>'required|email',
            'customer_password'=>'required|min:5',
        ]);

        if($validations->fails())
        {
            notify()->error($validations->getMessageBag());
            return redirect()->back();
        }

        $credentials['email']=$request->customer_email;
        $credentials['password']=$request->customer_password;
//        dd($credentials);

        if(auth()->attempt($credentials)){
            notify()->success('Login success.');
            return redirect()->back();
        }
        notify()->error('Invalid user info.');
        return redirect()->back();


    }

    public function Logout()
    {
        auth()->logout();
        notify()->success('Logout success.');
        return redirect()->back();
    }
}
