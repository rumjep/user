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



// Utama
Route::get('/', 'Utamacontroller@index');
Route::get('/acara/daftar/{macara}', 'Utamacontroller@daftar');
Route::post('/postdaftar', 'Utamacontroller@postdaftar');
Route::get('/passdaftar', 'Utamacontroller@passdaftar');

// Data Peserta Terverifikasi
Route::get('/datapeserta/verif/{id}', 'Datapesertaverif@index');

//Data Pemenang Doorprize
Route::get('/datapemenang/dorprize/{id}', 'Datapemenang@index');