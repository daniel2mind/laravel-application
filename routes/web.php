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

Route::get('/', function () { return view('welcome'); });


Route::get ('/perfis',                         'PerfilLocator@lista');
Route::get ('/perfis/add',                     'PerfilLocator@adiciona');
Route::post('/perfis/add',                     'PerfilLocator@adicionaPost');
Route::get ('/perfis/{perfil_id}/edit',        'PerfilLocator@edita');
Route::post('/perfis/{perfil_id}/edit',        'PerfilLocator@editaPost');
Route::get ('/perfis/{perfil_id}/show',        'PerfilLocator@visualiza');
Route::post('/perfis/{perfil_id}/del',         'PerfilLocator@excluiPost');
