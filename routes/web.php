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

Route::get('/', 'Auth\LoginController@showLoginForm')->middleware('guest');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('inicio', 'InicioController@index')->name('inicio');

// Gestión de usuarios
Route::get('users', 'OtherUserController@index')->name('users');
Route::get('create', 'OtherUserController@create')->name('create');
Route::post('create', 'OtherUserController@store')->name('create');
Route::get('edit/{otheruser}', 'OtherUserController@edit')->name('edit');
Route::post('edit/{otheruser}', 'OtherUserController@update')->name('update');
Route::post('destroy/{otheruser}', 'OtherUserController@destroy')->name('destroy');