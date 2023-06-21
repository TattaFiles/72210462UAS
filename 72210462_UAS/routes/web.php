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

Route::get('/form1', 'PageController@form1');
Route::get('/simpan','PageController@simpan'); //nomor 2

Route::get('/form2', 'PageController@form2');
Route::post('/simpancek','PageController@simpancek'); // nomor 3

Route::get('/desc','PageController@desc'); //untuk menampilkan nomor 4 d

Route::get('/challenge', 'PageController@Challenge'); //nomor 5

Route::get('/', function () {
    return view('welcome');
});
