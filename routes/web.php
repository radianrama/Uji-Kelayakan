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
    return view('welcome');
});

Route::resource('jenis','JenisController');
Route::resource('inventaris','InventarisController');
Route::resource('peminjaman','PeminjamanController');
Route::resource('ruang','RuangController');
Route::resource('pegawai','PegawaiController');
Route::resource('detailpinjam','DetailPinjamanController');


// Route::get('/','JenisController@index');
// Route::get('/','InventarisController@index');
// Route::get('/','PeminjamanController@index');
// Route::get('/','RuangController@index');
// Route::get('/','PegawaiController@index');

//DELETE
Route::get('/jenis/delete/{id_jenis}','JenisController@destroy');
Route::get('/inventaris/delete/{id_inventaris}','InventarisController@destroy');
Route::get('/peminjaman/delete/{id_peminjaman}','PeminjamanController@destroy');
Route::get('/ruang/delete/{id_ruang}','RuangController@destroy');
Route::get('/pegawai/delete/{id_pegawai}','PegawaiController@destroy');
Route::get('/detailpinjam/delete/{id_detail}','DetailPinjamanController@destroy');


//EDIT
Route::get('/jenis/{id_jenis}/edit','JenisController@edit');
Route::get('/inventaris/{id_inventaris}/edit','InventarisController@edit');
Route::get('/peminjaman/{id_peminjaman}/edit','PeminjamanController@edit');
Route::get('/ruang/{id_ruang}/edit','RuangController@edit');
Route::get('/pegawai/{id_pegawai}/edit','PegawaiController@edit');
Route::get('/detailpinjam/{id_detail}/edit','DetailPinjamanController@edit');


//UPDATE
Route::post('/jenis/{id_jenis}/update', 'JenisController@update');
Route::post('/inventaris/{id_inventaris}/update', 'InventarisController@update');
Route::post('/peminjaman/{id_peminjaman}/update', 'PeminjamanController@update');
Route::post('/ruang/{id_ruang}/update', 'RuangController@update');
Route::get('/pegawai/{id_pegawai}/update','PegawaiController@update');
Route::get('/detailpinjam/{id_detail}/update','DetailPinjamanController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jenis', 'JenisController@index')->name('jenis');