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

//Route::get('/', 'HomeController@index')->name('selection');

Route::group(['namespace' => 'Auth'], function () {
    Route::get('/','LoginController@userForm')->middleware('guest')->name('user.login');
    Route::post('/login','LoginController@login')->name('login');
    Route::get('/logout/{type}', 'LoginController@logout')->name('logout');
});

Route::group(['prefix' => 'user','middleware' => 'auth'], function (){
//============================== Dashboard ============================
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
});