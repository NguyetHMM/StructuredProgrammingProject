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

Route::prefix('productmodule')->group(function() {
    Route::get('/', 'ProductModuleController@index')->name('trang-chu');
    Route::get('/admin', 'AdminController@index')->name('admin-layout');
    //Category Product
    Route::get('/add-category-product', 'CategoryProductController@add_category_product')->name('add-category-product');
    Route::get('/all-category-product', 'CategoryProductController@all_category_product')->name('all-category-product');
    Route::post('/save-category-product', 'CategoryProductController@save_category_product')->name('save-category-product');
});
