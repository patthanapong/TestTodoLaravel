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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/todo', 'TodoController@index');
Route::get('/todo/create', 'TodoController@create');
Route::post('/todo', 'TodoController@store');
Route::get('/todo/create', 'TodoController@create');
Route::get('/todo/{todo}/edit', 'TodoController@edit');
Route::post('/todo/{todo}', 'TodoController@update');
Route::delete('/todo/{todo}', 'TodoController@destroy');
Route::delete('/todo/{todo}/up', 'TodoController@status');
//Route::POST('/todo/{todo}/up', 'TodoController@status');
