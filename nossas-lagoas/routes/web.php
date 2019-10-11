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
