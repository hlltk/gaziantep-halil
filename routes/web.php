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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hakkimda', 'App\Http\Controllers\HomeController@showView');
Route::get('/urunler', 'App\Http\Controllers\HomeController@showUrunler');
Route::get('/tablehm', 'App\Http\Controllers\HomeController@showUsers');
Route::get('/create-product', 'App\Http\Controllers\ProductController@create')->name('product.create'); //Product islemleri
Route::post('/save-product', 'App\Http\Controllers\ProductController@store')->name('product.save');
Route::get('/show-product','App\Http\Controllers\ProductController@index');
