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

Route::get('/', 'HomeController@index')->name('index');

// Actor Routes
Route::get('/actors', 'ActorsController@index')->name('actors');
Route::get('/add', 'ActorsController@add')->name('addActor');
Route::get('/single/{id}', 'ActorsController@single')->name('single');
Route::post('/store', 'ActorsController@store')->name('store');
Route::get('/delete/{id}', 'ActorsController@delete')->name('delete');
Route::get('/edit/{id}', 'ActorsController@edit')->name('edit');
Route::post('/update/{id}', 'ActorsController@update')->name('update');

// Movie Routes
Route::get('/movies', 'MoviesController@index')->name('movies');
Route::get('/add', 'MoviesController@add')->name('addMovie');
Route::get('/single/{id}', 'MoviesController@single')->name('single');
Route::post('/store', 'MoviesController@store')->name('store');


Auth::routes();

