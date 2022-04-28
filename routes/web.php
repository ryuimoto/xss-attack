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


Route::get('login','User\LoginController@showLoginForm')->name('user.login');
Route::post('login','User\LoginController@login');


Route::middleware('auth:user')->group(function () {
    Route::get('',function(){
        return 2434532;
    });

    // Route::get('','User\LoginController@');
});