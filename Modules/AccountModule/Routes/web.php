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

Route::prefix('accountmodule')->group(function() {

    Route::get('/', 'AccountModuleController@index');

    Route::get('/register', 'AccountModuleController@register')->name('register');
    Route::post('/register', 'AccountModuleController@storeUser');

    Route::get('/login', 'AccountModuleController@login')->name('login');
    Route::post('/login', 'AccountModuleController@authenticate');

    // Route::get('/showUserInfor', 'AccountModuleController@showUserInfor')->name('showUserInfor');

    Route::get('/editUserInfor', 'AccountModuleController@editUserInfor')->name('editUserInfor');
    Route::post('/editUserInfor', 'AccountModuleController@storeEditUserInfor');

    Route::get('logout', 'AccountModuleController@logout')->name('logout');

    Route::get('/home', 'AccountModuleController@home')->name('home');

});
