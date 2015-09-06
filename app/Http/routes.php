<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1'], function()
{
    Route::resource('comuna','ComunaController');
    Route::resource('tipo_pyme','TipoPymeController');
    Route::resource('pyme','PymeController');
    Route::resource('imagenes','ImagenController');
    Route::resource('pyme.imagenes','PymeImagenController');
    Route::resource('evento','EventoController');
});

Route::get('storage/{archivo}','StorageController@getFile');

Route::get('token', function()
{
    return csrf_token();
});