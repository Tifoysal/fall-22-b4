<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});


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

});
