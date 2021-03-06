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

Auth::routes();
//Route::get('/welcome', 'CandidadoController@welcome')-> name (welcome);
Route::resource('candidato', 'CandidatoController');
Route::get('aprovados', 'CandidatoController@aprovados');
Route::get('reprovados', 'CandidatoController@reprovados');
Route::get('pedentes', 'CandidatoController@pedentes');
Route::resource('gestor', 'GestorController');
Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
