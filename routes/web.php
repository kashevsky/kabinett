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
Route::get('/category/{id}', '\App\Http\Controllers\CategoryController@show')->name('category.show');
Route::get('/product/{id}','\App\Http\Controllers\ProductController@show')->name('product.show');
Route::post('/search','\App\Http\Controllers\HomeController@search')->name('search');
