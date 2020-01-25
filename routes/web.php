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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/animes', function () {
    return view('animes');
});

Route::get('/series', function () {
    return view('series');
});

Route::get('/favoritos', function () {
    return view('favoritos');
});
//-----------------------------------------------------
//ADD SERIE
Route::get('/adicionar', 'SeriesControler@create');
Route::post('/adicionando', 'SeriesControler@store');

//==========================================================
//ADD GENEROS NA SERIE
Route::get('/adicionar/genero', 'AdicionarGenero@create');
//===========================================================
//=?

//===========================================================
Route::get('/adicionar/genero/{id}', 'AdicionarGenero@store');
//===========================================================
Route::get('/animes/{id}', 'SeriesControler@show');
Route::get('/series/{id}', 'SeriesControler@show')->name('serie');


Route::get('/generos/{id}', 'GenerosController@show');
//==============================================================
Route::get('/favoritar/{id_serie}', 'FavoritosController@store');
//======================================================================
Route::get('/pesquisa', 'SeriesControler@pesquisar');
Auth::routes();

