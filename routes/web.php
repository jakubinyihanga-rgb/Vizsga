<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\aboutController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\FileController;
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


Auth::routes();



Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('home');
Route::get('/w/show/{id}', [ProductController::class,'show']);


//MainFunction  Home / Products  / about us   / contactus   / services
Route::get('/admin', [ProductController::class, 'admin']);
Route::get('/del', [ProductController::class, 'deleteproduct']);

// Route::get('/update', [ProductController::class, 'updateproduct']);
Route::get('/editproduct', [ProductController::class, 'editProductPage'])->name('editproduct');
Route::put('/products/{id}/update-info', [ProductController::class, 'updateProductInfo'])->name('products.updateInfo');




Route::middleware('auth')->group(
    function()
    {

 Route::get('/pn', [ProductController::class, 'product_name'])->name('ecommerce-products');
 Route::get('/pd', [ProductController::class, 'product_description'])->name('ecommerce-products');
 Route::get('/pp', [ProductController::class, 'product_price'])->name('ecommerce-products');
 Route::get('/pu', [ProductController::class, 'product_number'])->name('ecommerce-products');
 Route::get('/pb', [ProductController::class, 'product_brand'])->name('ecommerce-products');
 Route::get('/pc', [ProductController::class, 'product_category'])->name('ecommerce-products');
 Route::get('/ecommerce-products/sh', [ProductController::class,'search'])->name('result_search');

});

// group by routes (now public)
Route::get('/groub-by-pp', [ProductController::class, 'grobpby_product_price'])->name('ecommerce-products');
Route::get('/groub-by-pb', [ProductController::class, 'grobpby_product_brand'])->name('ecommerce-products');
Route::get('/groub-by-pc', [ProductController::class, 'grobpby_product_category'])->name('ecommerce-products');


// search page
Route::get('/show_details/{id}', [ProductController::class, 'show_details'])->name('show_details');
Route::get('/file-details', [FileController::class, 'index']);


// new product (now public)
Route::post('/newproduct/store', [ProductController::class, 'store'])->name('newproduct.store');
Route::get('/newproduct', [ProductController::class, 'create'])->name('newproduct');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/products/update-description/{id}', [ProductController::class, 'updateDescription'])
    ->name('products.updateDescription');



