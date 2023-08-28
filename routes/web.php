<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', '\App\Http\Controllers\HomeController@index')->name('home');
Route::get('/category/{id}', '\App\Http\Controllers\CategoryController@index')->name('category.index');//субкатегории
Route::get('/category/{id}_', '\App\Http\Controllers\CategoryController@show')->name('category.show');//субкатегории
Route::get('/{categoryId}/sub/{id}', '\App\Http\Controllers\SubCategoryController@index')->name('sub_category.index');//продукты
Route::get('/{categoryId}/sub/{id}_', '\App\Http\Controllers\SubCategoryController@show')->name('sub_category.show');//продукты
Route::get('/{categoryId}/{subCategoryid}/prod/{id}','\App\Http\Controllers\ProductController@show')->name('product.show');//субпродукты
Route::get('/{categoryId}/{subCategoryid}/{product_id}/sub_prod/{id}','\App\Http\Controllers\SubProductController@show')->name('sub_product.show');//субпродукт
Route::post('/search','\App\Http\Controllers\HomeController@search')->name('search');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
