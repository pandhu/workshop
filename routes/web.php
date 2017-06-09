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

Route::get('/', 'BaseController@showHome');
Route::post('message', 'BaseController@storeMessage');
Route::get('message', 'BaseController@showMessage');
Route::get('{input}', 'BaseController@testInput');
