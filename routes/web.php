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

Route::get('/', 'EmpresaLocator@listagem');

Route::get ('/empresas',                          'EmpresaLocator@lista');
Route::get ('/empresas/add',                      'EmpresaLocator@adiciona');
Route::post('/empresas/add',                      'EmpresaLocator@adicionaPost');
Route::get ('/empresas/{empresa_id}/edit',        'EmpresaLocator@edita');
Route::post('/empresas/{empresa_id}/edit',        'EmpresaLocator@editaPost');
Route::get ('/empresas/{empresa_id}/show',        'EmpresaLocator@visualiza');
Route::post('/empresas/{empresa_id}/del',         'EmpresaLocator@excluiPost');


Route::get ('/empresas',                          'EmpresaLocator@lista');
Route::get ('/empresas/add',                      'EmpresaLocator@adiciona');
Route::post('/empresas/add',                      'EmpresaLocator@adicionaPost');
Route::get ('/empresas/{empresa_id}/edit',        'EmpresaLocator@edita');
Route::post('/empresas/{empresa_id}/edit',        'EmpresaLocator@editaPost');
Route::get ('/empresas/{empresa_id}/show',        'EmpresaLocator@visualiza');
Route::post('/empresas/{empresa_id}/del',         'EmpresaLocator@excluiPost');
