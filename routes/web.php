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
    return view('layouts.index-master');
});




Route::get('/hakkimda', 'HomeController@showView');
Route::get('/urunler', 'HomeController@showUrunler');
Route::get('/tablehm', 'HomeController@showUsers');
Route::get('/create-product', 'ProductController@create')->name('product.create'); //Product islemleri
Route::post('/save-product', 'ProductController@store')->name('product.save');
Route::get('/show-product','ProductController@index')->name('product.index');
//Route::get('/show-product','HomeworkController@index')->name('product.index');
Route::get('/export-product','ProductController@export')->name('product.export');


/**
 * Kategori işlemleri
 */
Route::get('/upload-categories','CategoryController@upload')->name('category.upload');
Route::post('/import-categories', 'CategoryController@import')->name('category.import');



/**
 * SMS işlemleri
 */

//Route::get('/sms-sending','HomeworkController@store')->name('sms.sending');
Route::get('/sms-sending','SMSController@sms')->name('sms.sending');
