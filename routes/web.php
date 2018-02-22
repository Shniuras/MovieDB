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

//// Actor Routes
Route::get('/actors', 'ActorsController@index')->name('actors');
//Add
Route::get('/addActor', 'ActorsController@add')->name('addActor')->middleware('auth');
Route::post('/storeActor', 'ActorsController@store')->name('storeActor')->middleware('auth');
//Single
Route::get('/singleActor/{id}', 'ActorsController@single')->name('singleActor');
//Delete
Route::get('/deleteActor/{id}', 'ActorsController@delete')->name('deleteActor')->middleware('auth');
//Update
Route::get('/editActor/{id}', 'ActorsController@edit')->name('editActor')->middleware('auth');
Route::post('/updateActor/{id}', 'ActorsController@update')->name('updateActor')->middleware('auth');

//// Movie Routes
Route::get('/movies', 'MoviesController@index')->name('movies');
//Add
Route::get('/addMovie', 'MoviesController@add')->name('addMovie')->middleware('auth');
Route::post('/storeMovie', 'MoviesController@store')->name('storeMovie')->middleware('auth');
//Single
Route::get('/singleMovie/{id}', 'MoviesController@single')->name('singleMovie');
//Delete
Route::get('/deleteMovie/{id}', 'MoviesController@delete')->name('deleteMovie')->middleware('auth');
//Update
Route::get('/editMovie/{id}', 'MoviesController@edit')->name('editMovie')->middleware('auth');
Route::post('/updateMovie/{id}', 'MoviesController@update')->name('updateMovie')->middleware('auth');

////Category Routes
Route::get('/categories', 'CategoriesController@index')->name('categories');
//Add
Route::get('/addCategory', 'CategoriesController@add')->name('addCategory')->middleware('auth');
Route::post('/storeCategory', 'CategoriesController@storeCategory')->name('storeCategory')->middleware('auth');
//Single
Route::get('/singleCategory/{id}', 'CategoriesController@single')->name('singleCategory');
//Delete
Route::get('/deleteCategory/{id}', 'CategoriesController@delete')->name('deleteCategory')->middleware('auth');
//Update
Route::get('/editCategory/{id}', 'CategoriesController@edit')->name('editCategory')->middleware('auth');
Route::post('/updateCategory/{id}', 'CategoriesController@update')->name('updateCategory')->middleware('auth');

////User Routes
Route::get('/users', 'UserController@index')->name('users');
//Add
Route::get('/addUser', 'UserController@add')->name('addUser')->middleware('auth');
Route::post('/storeUser', 'UserController@store')->name('storeUser')->middleware('auth');
//Single
Route::get('/singleUser/{id}', 'UserController@single')->name('singleUser');
//Delete
Route::get('/deleteUser/{id}', 'UserController@delete')->name('deleteUser')->middleware('auth');
//Edit
Route::get('/editUser/{id}', 'UserController@edit')->name('editUser');
Route::post('/updateUser', 'UserController@edit')->name('updateUser');


Auth::routes();

