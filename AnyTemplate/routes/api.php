<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//USER
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('book', 'BookController@book');

Route::get('bookall', 'BookController@bookAuth')->middleware('jwt.verify');
Route::get('user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');

//ANGGOTA
Route::get('/cek_anggota','anggotacontroller@cek')->middleware('jwt.verify');
Route::post('/save_anggota','anggotacontroller@store')->middleware('jwt.verify');;
Route::put('/ubah_anggota/{id}','anggotacontroller@update')->middleware('jwt.verify');;
Route::delete('/hapus_anggota/{id}','anggotacontroller@delete')->middleware('jwt.verify');;
Route::get('tampil_anggota','anggotacontroller@tampil')->middleware('jwt.verify');;

//BUKU
Route::get('/cek_buku','bukucontroller@cek')->middleware('jwt.verify');
Route::post('/save_buku','bukucontroller@store')->middleware('jwt.verify');;
Route::put('/ubah_buku/{id}','bukucontroller@update')->middleware('jwt.verify');;
Route::delete('/hapus_buku/{id}','bukucontroller@delete')->middleware('jwt.verify');;
Route::get('tampil_buku','bukucontroller@tampil')->middleware('jwt.verify');;
