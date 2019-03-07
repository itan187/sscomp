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

// Gestión de proyectos
Route::get('projects', 'ProjectController@index')->name('projects');
Route::post('projects', 'ProjectController@store')->name('projects');

//editar Step
Route::get('EditStep1', 'Projectcontroller@update')->name('EditStep1');

#cotizacion 

//Gestion de Clientes 
Route::get('clients','ClientController@index')->name('clients');
Route::get('createCl', 'ClientController@createCl')->name('createCl');
Route::post('createCl','ClientController@saveCl')->name('createCl');
Route::get('editCl/{client}', 'ClientController@editCl')->name('editCl');
Route::post('editCl/{client}', 'ClientController@update')->name('updateCl');
Route::post('destroyCl/{client}', 'ClientController@destroyCl')->name('destroyCl');


#descargar archivos
Route::get('/download/{file}' , 'ProjectController@downloadFile')->name('download');
#eliminar archivo de carpeta
//Route::get('/deleted/{file}','ProjectController@deletedFile')->name('deleted');
Route::post('/deleted/{id}','ProjectController@destroy')->name('quotation.deleted');

