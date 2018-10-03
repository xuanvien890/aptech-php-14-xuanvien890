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
Route::get('/news','NewsController@index')->name('news.index');

Route::get('/news/create','NewsController@create')->name('news.create');

Route::get('/news/{slug}','NewsController@show')->name('news.show');

Route::get('/news/edit/{id}','NewsController@edit')->name('news.edit');

Route::put('/news/update/{id}','NewsController@update')->name('news.update');



Route::post('/news/store','NewsController@store')->name('news.store');

Route::delete('/news/delete/{id}','NewsController@destroy')->name('news.destroy');