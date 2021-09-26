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

Route::get('/', function () {
    return view('welcome');
});
Route::get('contato/index', 'ContatosController@index');
Route::get('contato/novo','ContatosController@create');
Route::post('contato/novo', 'ContatosController@contatoNew')->name('registrar_contato');
Route::get('contato/ver/{id}', 'ContatosController@show');
Route::get('contato/editar/{id}', 'ContatosController@edit');
Route::post('contato/editar/{id}', 'ContatosController@update')->name('alterar_contato');
Route::get('contato/excluir/{id}', 'ContatosController@delete');
