<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FellowController@home');

Route::get('/register', 'FellowController@register');

Route::get('/create', 'FellowController@register');


Route::post('/store', 'FellowController@store');

Route::get('/list', 'FellowController@list');

Route::get('/edit/{id}', 'FellowController@edit')->name('edit');

Route::post('/update/{id}', 'FellowController@update');

Route::get('/delete/{id}', 'FellowController@delete')->name('delete');

