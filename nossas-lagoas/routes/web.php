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

use App\Http\Controllers\LagoaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/lista-lagoa', function () {
    return view('lista_lagoas');
});

Route::get('/lagoa', function () {
    return view('lagoa');
});

Route::get('/cadastro-lagoa', function () {
    return view('cadastro_lagoas');
});

Route::get('/lagoa/cadastro', 'LagoaController@create')->name('lagoa.create');
Route::resource('lagoas', 'LagoaController');
//Route::resource('fisicoquimicas', 'FisicoquimicaController');
//Route::resource('biologicas', 'BiologicaController');
//Route::resource('localidades', 'LocalidadeController');
