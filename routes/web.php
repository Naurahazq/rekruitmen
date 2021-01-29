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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('index', 'Home\HomeController@index')->name('home');

Route::group(['prefix' => 'pengguna'], function(){
    Route::get('index', 'PenggunaController@index')->name('pengguna');
    Route::get('create', 'PenggunaController@create')->name('pengguna.create');
    Route::post('store', 'PenggunaController@store')->name('pengguna.store');
    Route::get('edit/{pengguna}' , 'PenggunaController@edit')->name('pengguna.edit');
    Route::patch('update/{pengguna}' , 'PenggunaController@update')->name('pengguna.update');
    Route::delete('delete/{pengguna}', 'PenggunaController@destroy')->name('pengguna.delete');
    Route::get('show/{pengguna}' , 'PenggunaController@show')->name('pengguna.show');
});

Route::group(['prefix' => 'bagian'], function(){
    Route::get('index', 'BagianController@index')->name('bagian');
    Route::get('create', 'BagianController@create')->name('bagian.create');
    Route::post('store', 'BagianController@store')->name('bagian.store');
    Route::get('edit/{bagian}' , 'BagianController@edit')->name('bagian.edit');
    Route::patch('update/{bagian}' , 'BagianController@update')->name('bagian.update');
    Route::delete('delete/{bagian}', 'BagianController@destroy')->name('bagian.delete');
    Route::get('show/{bagian}' , 'BagianController@show')->name('bagian.show');
});

Route::group(['prefix' => 'pelamar'], function(){
    Route::get('index', 'PelamarController@index')->name('pelamar');
    Route::get('create', 'PelamarController@create')->name('pelamar.create');
    Route::post('store', 'PelamarController@store')->name('pelamar.store');
    Route::get('edit/{pelamar}' , 'PelamarController@edit')->name('pelamar.edit');
    Route::patch('update/{pelamar}' , 'PelamarController@update')->name('pelamar.update');
    Route::delete('delete/{pelamar}', 'PelamarController@destroy')->name('pelamar.delete');
    Route::get('show/{pelamar}' , 'PelamarController@show')->name('pelamar.show');
});

Route::group(['prefix' => 'penerimaan'], function(){
    Route::get('index', 'PenerimaanController@index')->name('penerimaan');
    Route::get('create', 'PenerimaanController@create')->name('penerimaan.create');
    Route::post('store', 'PenerimaanController@store')->name('penerimaan.store');
    Route::get('edit/{penerimaan}' , 'PenerimaanController@edit')->name('penerimaan.edit');
    Route::patch('update/{penerimaan}' , 'PenerimaanController@update')->name('penerimaan.update');
    Route::delete('delete/{penerimaan}', 'PenerimaanController@destroy')->name('penerimaan.delete');
    Route::get('show/{penerimaan}' , 'PenerimaanController@show')->name('penerimaan.show');
});



