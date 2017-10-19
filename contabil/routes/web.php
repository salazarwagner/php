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

use App\Conta;
use App\Categoria;

Route::get('/', function () {
    return redirect('api');
});

Route::group(array('prefix' => 'api'), function() {
  Route::resource('contas', 'ContaController');
  Route::resource('categorias', 'CategoriaController');
});



/*



Route::get('/', function () {
    return view('welcome');
});

Route::get('/conta', function () {
    return Conta::all();
});

Route::get('/categoria', function () {
    return Categoria::all();
}); */