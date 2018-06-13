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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('message', 'MessageController');

Route::resource('peca', 'PecaController')->middleware('auth');
Route::resource('fornecedor', 'FornecedorController')->middleware('auth');
Route::resource('estoque', 'EstoqueController')->middleware('auth');
Route::resource('vendedor', 'VendedorController')->middleware('auth');


Route::get('message.report',[
    'as' => 'message.report',
    'uses' => 'MessageController@report'
]);
//
//Route::get('pecas',[
//    'as' => 'pecas.index',
//    'uses' => 'PecaController@index'
//]);
//
//Route::get('pecas/criar',[
//    'as' => 'pecas.create',
//    'uses' => 'PecaController@create'
//]);