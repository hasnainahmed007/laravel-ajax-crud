<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductAjaxController;
use App\Http\Controllers\StudentController;

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

// Route::get('/product',[ProductController::class,'product'])->name('product');
// Route::post('/add-product',[ProductController::class,'addproduct'])->name('add.product');

Route::resource('products-ajax-crud', ProductAjaxController::class);

//Student crud

Route::resource('student', StudentController::class,);

