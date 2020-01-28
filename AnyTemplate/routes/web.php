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
Route::get('/login', function () {
    return view('login.login');
});
Route::get('/register', function () {
    return view('login.register');
});
Route::get('/login','logincontroller@index');
Route::post('/login/cek','logincontroller@cek');
//dasboard
Route::get('/dasboard','dasboardcontroller@index');
//logout
Route::get('/logout','logincontroller@logout');

Route::get('basic_table', function () {
    return view('basic_table');
});
//Barang
Route::get('/barang','barangcontroller@index');

Route::get('/beli','barangcontroller@beli');
Route::get('/cart','barangcontroller@cart');
