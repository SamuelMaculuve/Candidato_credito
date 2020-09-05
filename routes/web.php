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

//Route::get('/candidatos','CandidatoController@index');


Auth::routes();
//Route::get('/welcome', 'CandidatoController@welcome')-> name (welcome);
Route::resource('candidato', 'CandidatoController');
Route::resource('gestor', 'GestorController');
Route::get('/', 'HomeController@home')->name('home');
