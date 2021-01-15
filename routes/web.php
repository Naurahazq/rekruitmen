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
});

Route::group(['prefix' => 'bagian'], function(){
    Route::get('index', 'BagianController@index')->name('bagian');
    Route::get('create', 'BagianController@create')->name('bagian.create');
});

Route::group(['prefix' => 'pelamar'], function(){
    Route::get('index', 'PelamarController@index')->name('pelamar');
    Route::get('create', 'PelamarController@create')->name('pelamar.create');
});

Route::group(['prefix' => 'penerimaan'], function(){
    Route::get('index', 'PenerimaanController@index')->name('penerimaan');
    Route::get('create', 'PenerimaanController@create')->name('penerimaan.create');
});



