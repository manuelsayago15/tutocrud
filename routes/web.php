<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', [
	'as' => 'usuarioIndex',
	'uses' => 'UsuarioController@index'
]);

Route::get('/usuario/nuevo', [
	'as' => 'usuarioNew',
	'uses' => 'UsuarioController@newUser'
]);

Route::post('/usuario/guardar', [
	'as' => 'usuarioStore',
	'uses' => 'UsuarioController@store'
]);

Route::get('/usuario/editar/{id}', [
	'as' => 'usuarioEdit',
	'uses' => 'UsuarioController@edit'
]);

Route::put('/usuario/update/{id}', [
	'as' => 'usuarioUpdate',
	'uses' => 'UsuarioController@update'
]);

Route::delete('/usuario/delete/{id}', [
	'as' => 'usuarioDelete',
	'uses' => 'UsuarioController@delete'
]);