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

Route::get('/', function () {

});

Route::resource('eventos', 'EventoController');
Route::get('eventos/{id}/listas', 'EventoListaController@getListas');
Route::get('listas/{id}/clientes', 'ListaBonusClientesController@getClientes');
Route::get('teste', 'TesteController@teste');
