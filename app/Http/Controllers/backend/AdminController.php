<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login()
    {
        return view('backend.pages.login');
    }

    public function doLogin(Request $request)
    {
       $request->validate([
          'email'=>'required|email',
          'password'=>'required|min:5'
       ]);

       $credentials=$request->except('_token');
       if(auth()->attempt($credentials)){
           return redirect()->route('dashboard');
       }

       return redirect()->back()->with('message','Invalid Credentials.');



    }

    public function dashboard(){
        return view('backend.dashboard');
    }
    public function master(){
     return view('backend.master');
    }
    public function newPage(){
        return view('backend.pages.newPage');
    }
}
