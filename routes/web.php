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
Route::get('/','FrontController@beranda');
Route::get('/berita','FrontController@berita');
Route::get('/tentang','FrontController@tentang');
Route::post('/pengajuan','FrontController@pengajuan');
Route::get('/donation/{id}/donation-check','FrontController@donation');
Route::post('/donation-check','FrontController@donationcheck');
Route::get('/pembayaran-check','FrontController@donationcheck');
Route::get('/cara-bayar','FrontController@carabayar');
Route::get('/kategori/{kat}','FrontController@kategori');
Route::get('/kecamatan/{kec}','FrontController@Kecamatan');
Route::get('/exportpdfbayar','FrontController@ExportPDF');
Route::get('/notfound','FrontController@notfoundkec');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::get('/detail/post/{slug}', 'FrontController@detailpost');

// Route::middleware('auth')->group(function(){
  //Admin Panel
  Route::get('/dashboard/post','PostController@index');
  Route::get('donatur/export/', 'AdminController@export');
  Route::get('/dashboard','AdminController@dashboard');
  Route::get('/dashboard/donatur','AdminController@donatur');
  Route::get('/delete/{id}/donatur', 'AdminController@deletedonatur');
  Route::get('/dashboard/pengajuan','AdminController@pengajuan');
  Route::post('/post/{id}/update','PostController@update');
  Route::get('/delete/{id}/pengajuan','AdminController@deletepengajuan');
  Route::get('/jumlah','AdminController@jumlahdonasi');
  Route::get('/dashboard/statusditerima','AdminController@statusditerima');
  Route::get('/donatur/{id}/sendemail','AdminController@sendemail');
  Route::get('/pengajuan/send','AdminController@pengajuanemail');
  Route::post('/pengajuan/send','AdminController@pengajuansend')->name('send.pengajuan');
  


  //POST Admin
  Route::get('/show/{slug}','PostController@show');

  Route::get('/post/create',[
       'uses' => 'PostController@create',
       'as'   => 'post.create'
  ]);
  Route::post('/post/store',[
       'uses' => 'PostController@store',
       'as'   => 'post.store'
  ]);
  Route::get('/post/{slug}/edit',[
       'uses' => 'PostController@edit',
       'as'   => 'post.edit'
  ]);
  Route::post('/post/{slug}/update',[
       'uses' => 'PostController@update',
       'as'   => 'post.update'
  ]);
  Route::get('/delete/{slug}',[
       'uses' => 'PostController@delete',
       'as'   => 'delete.post'
  ]);
