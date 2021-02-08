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

//FRONT END
Route::get('/','FrontController@home');
Route::get('/donasi','FrontController@donasi');
Route::get('/tentang','FrontController@tentang');

//Admin Panel
Route::get('/login','AuthController@index');

Route::get('/dashboard','AdminController@dashboard');

Route::get('/dashboard/donasi','DonasiController@index');
Route::get('/dashboard/donasi/create','DonasiController@create');
Route::get('/donasi/{id}/detail','DonasiController@show');
Route::post('/dashboard/donasi','DonasiController@store');
Route::get('/dashboard/{id}/delete','DonasiController@destroy');
Route::get('/dashboard/{id}/edit','DonasiController@edit');
Route::post('/dashboard/{id}/update','DonasiController@update');
