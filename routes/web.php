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
Route::get('/addActor', 'ActorsController@add')->name('addActor');
Route::post('/storeActor', 'ActorsController@store')->name('storeActor');
Route::get('/singleActor/{id}', 'ActorsController@single')->name('singleActor');
Route::get('/deleteActor/{id}', 'ActorsController@delete')->name('deleteActor');
Route::get('/editActor/{id}', 'ActorsController@edit')->name('editActor');
Route::post('/updateActor/{id}', 'ActorsController@update')->name('updateActor');

// Movie Routes
Route::get('/movies', 'MoviesController@index')->name('movies');
Route::get('/addMovie', 'MoviesController@add')->name('addMovie');
Route::post('/storeMovie', 'MoviesController@store')->name('storeMovie');
Route::get('/singleMovie/{id}', 'MoviesController@single')->name('singleMovie');
Route::get('/deleteMovie/{id}', 'MoviesController@delete')->name('deleteMovie');
Route::get('/editMovie/{id}', 'MoviesController@edit')->name('editMovie');
Route::post('/updateMovie/{id}', 'MoviesController@update')->name('updateMovie');

//Category Routes
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/addCategory', 'CategoriesController@add')->name('addCategory');
Route::post('/storeCategory', 'CategoriesController@storeCategory')->name('storeCategory');
Route::get('/singleCategory/{id}', 'CategoriesController@single')->name('singleCategory');
Route::get('/deleteCategory/{id}', 'CategoriesController@delete')->name('deleteCategory');
Route::get('/editCategory/{id}', 'CategoriesController@edit')->name('editCategory');
Route::post('/updateCategory/{id}', 'CategoriesController@update')->name('updateCategory');


Auth::routes();

