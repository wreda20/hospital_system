<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Auth', 'middleware' => 'guest:admin'], function () {
    Route::get('login','LoginController@adminForm')->name('admin.form');

});

Route::group(['middleware' => ['auth:admin']], function () {

    //==============================dashboard============================
    Route::get('/dashboard', function () {
        return view('Admin.dashboard');
    });
});


