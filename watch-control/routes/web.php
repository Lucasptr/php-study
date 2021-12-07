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


Route::get('/series', 'SerieController@index')
	->name('serie.index');
Route::get('/series/create', 'SerieController@create')
	->name('serie.create');
Route::post('/series/create', 'SerieController@store');
Route::delete('/series/{id}', 'SerieController@destroy');

