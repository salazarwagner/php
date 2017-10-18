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
    //return redirect('api');
    return view('welcome')->with('name', 'World');
});

Route::group(array('prefix' => 'api'), function() {
  Route::get('/', function () {
      return response()->json(['message' => 'Contabil REST API', 'status' => 'Connected']);;
  });
  Route::resource('conta', 'ContaController');
  Route::resource('categoria', 'CategoriaController');
});


Route::post('/teste','CategoriaController@store');




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