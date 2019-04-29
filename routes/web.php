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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/coba-login', function () {
    return view('login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::resource('blok', 'BlokController');