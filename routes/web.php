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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('blok', 'BlokController')->middleware('auth');
Route::post('/blok/setup', 'BlokController@setup')->name('blok.setup')->middleware('auth');
Route::resource('kota', 'AsalKotaController')->middleware('auth');
Route::resource('jenisberas', 'JenisBerasController')->middleware('auth');
Route::resource('kualitasberas', 'KualitasBerasController')->middleware('auth');
Route::resource('berat', 'BeratBerasController')->middleware('auth');
Route::resource('gudang', 'GudangController')->middleware('auth');
