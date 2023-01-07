<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\backend\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'home'])->name('home');

//frontend routes
Route::post('/create-customer',[HomeController::class,'register'])->name('customer.register');
Route::post('/customer-login',[HomeController::class,'login'])->name('customer.login');
Route::get('/customer-logout',[HomeController::class,'logout'])->name('customer.logout');





//backend routes
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('/admin/do-login',[AdminController::class,'doLogin'])->name('admin.do.login');

Route::group(['middleware'=>'auth'],function (){
    Route::get('/admin',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/admin-new-page',[AdminController::class,'newPage']);

    Route::get('/category-list',[CategoryController::class,'list'])->name('category.list');
    Route::get('/category/create-form',[CategoryController::class,'createForm'])->name('category.create.form');
    Route::post('/category/submit',[CategoryController::class,'submit'])->name('category.submit');

    Route::get('/product-list',[ProductController::class,'list'])->name('product.list');
    Route::get('/product/create',[ProductController::class,'createProduct'])->name('product.create');
    Route::post('/product/store',[ProductController::class,'store'])->name('product.store');

    Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');
});
