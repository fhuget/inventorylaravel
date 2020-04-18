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

Route::post('/postlogin', 'AuthController@login');

Route::post('/postregister', 'AuthController@register');


// Admin

Route::group(['middleware' => ['auth', 'chckRole:admin']], function(){

	Route::get('/dashboard', function () {
    return view('dashboard.index');
	});

		// Fakultas
	Route::resource('fakultas', 'FakultasController');
	Route::get('fakultas', ['as' => 'fakultas.index', 'uses' => 'FakultasController@index']);
	Route::get('fakultas/create', ['as' => 'fakultas.create', 'uses' => 'FakultasController@create']);
	Route::post('fakultas', ['as' => 'fakultas.store', 'uses' => 'FakultasController@store']);
	Route::get('fakultas/edit/{id}', ['as' => 'fakultas.edit', 'uses' => 'FakultasController@edit']);
	Route::put('fakultas/edit/{id}', ['as' => 'fakultas.update', 'uses' => 'FakultasController@update']);
	Route::get('fakultas/delete/{id}', ['as' => 'fakultas.delete', 'uses' => 'FakultasController@delete']);

	// Jurusan
	Route::get('jurusan', ['as' => 'jurusan.index', 'uses' => 'JurusanController@index']);
	Route::get('jurusan/create', ['as' => 'jurusan.create', 'uses' => 'JurusanController@create']);
	Route::post('jurusan', ['as' => 'jurusan.store', 'uses' => 'JurusanController@store']);
	Route::get('jurusan/edit/{id}', ['as' => 'jurusan.edit', 'uses' => 'JurusanController@edit']);
	Route::post('jurusan/update/{id}', ['as' => 'jurusan.update', 'uses' => 'JurusanController@update']);
	Route::get('jurusan/delete/{id}', ['as' => 'jurusan.delete', 'uses' => 'JurusanController@delete']);
	Route::get('jurusan/export_excel', ['as' => 'jurusan.download', 'uses' => 'JurusanController@export_excel']);

	// Ruangan
	Route::get('ruangan', ['as' => 'ruangan.index', 'uses' => 'RuanganController@index']);
	Route::get('ruangan/create', ['as' => 'ruangan.create', 'uses' => 'RuanganController@create']);
	Route::post('ruangan/store', ['as' => 'ruangan.store', 'uses' => 'RuanganController@store']);
	Route::get('ruangan/edit/{id_ruangan}', ['as' => 'ruangan.edit', 'uses' => 'RuanganController@edit']);
	Route::put('ruangan/update/{id_ruangan}', ['as' => 'ruangan.update', 'uses' => 'RuanganController@update']);
	Route::get('ruangan/delete/{id_ruangan}', ['as' => 'ruangan.delete', 'uses' => 'RuanganController@delete']);

});


// Staff
Route::group(['middleware' => ['auth','chckRole:admin,staff']], function(){

	Route::get('/dashboard', function () {
    return view('dashboard.index');
	});

	// Barang
	Route::get('barang', ['as' => 'barang.index', 'uses' => 'BarangController@index']);
	Route::get('barang/create', ['as' => 'barang.create', 'uses' => 'BarangController@create']);
	Route::post('barang/store', ['as' => 'barang.store', 'uses' => 'BarangController@store']);
	Route::get('barang/edit/{id_barang}', ['as' => 'barang.edit', 'uses' => 'BarangController@edit']);
	Route::put('barang/update/{id_barang}', ['as' => 'barang.update', 'uses' => 'BarangController@update']);
	Route::get('barang/delete/{id_barang}', ['as' => 'barang.delete', 'uses' => 'BarangController@delete']);
	Route::get('barang/export_excel', ['as' => 'barang.download', 'uses' => 'BarangController@export_excel']);


});


Route::get('/login', 'AuthController@loginform')->name('login');

Route::get('/register', 'AuthController@registerform');



Route::get('/logout', 'AuthController@logout');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

