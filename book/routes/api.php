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
Route::post('register', 'controllerpetugas@register');
Route::post('login', 'controllerpetugas@login');
Route::get('book', 'BookController@book');
Route::get('bookall', 'BookController@bookAuth')->middleware('jwt.verify');
Route::get('user', 'controllerpetugas@getAuthenticatedUser')->middleware('jwt.verify');
