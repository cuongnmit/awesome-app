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

Auth::routes();

Route::get('/', 'TransactionController@index')->name('home');
Route::post('/transactions/add', 'TransactionController@store')->name('transaction.store');
Route::get('/logout', 'Auth\LoginController@logout');
