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
Route::get('/actors', 'ActorsController@index')->name('actors');
Route::get('/add', 'ActorsController@add')->name('add');
Route::get('/single', 'ActorsController@single')->name('single');
Route::post('/store', 'ActorsController@store')->name('store');

Auth::routes();

