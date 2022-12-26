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
Route::get('/admin-dashboard',[AdminController::class,'dashboard']);
Route::get('/admin-master',[AdminController::class,'master']);
Route::get('/admin-new-page',[AdminController::class,'newPage']);

Route::get('/category-list',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create-form',[CategoryController::class,'createForm'])->name('category.create.form');
Route::post('/category/submit',[CategoryController::class,'submit'])->name('category.submit');

Route::get('/product-list',[ProductController::class,'list'])->name('product.list');
Route::get('/product/create',[ProductController::class,'createProduct'])->name('product.create');

