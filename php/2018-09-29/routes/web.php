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
// Route::resource('user','UserController');
Route::get('/users','UserController@index')->name('users.index');

Route::get('/show/{id}','UserController@show');

// Route::get('/users/create','UserController@create');

Route::post('/users/{id}','UserController@destroy');