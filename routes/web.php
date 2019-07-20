<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Routing\Route;

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




Route::get('/', 'HomeController@home');

Route::get('/contato', 'ContatoController@contato');

Route::get('/sobre', 'SobreController@sobre');

Route::get('/mapa', 'MapaController@mapa');

Route::get('/loja', 'LojaController@loja');

Route::get('/login', 'LoginController@login');

Route::get('/faq', 'FaqController@faq');




