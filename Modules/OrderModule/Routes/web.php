<?php

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

Route::prefix('ordermodule')->group(function() {
    Route::get('/', 'OrderModuleController@index')->name('index-2'); 
    Route::get('/order','OrderModuleController@show')->name('showOrder');
    Route::post('/order','OrderModuleController@addToCart')->name('addToCart');
    Route::post('/order-update','OrderModuleController@updateCart')->name('updateCart');
    Route::get('/productDetail/{product_id}','OrderModuleController@show_detail');
});
