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


// ファーストページのルーティング
Route::get('/', 'ArrayController@index');

Route::get('/search','ArrayController@search');
Route::get('/id={id}', 'ArrayController@detail');