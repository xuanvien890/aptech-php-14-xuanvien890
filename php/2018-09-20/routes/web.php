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

Route::get('foo', function () {
    return 'Hello World';
});
Route::get('sayhello/{name}', function ($name) {
    echo 'Hello Lavarel! I am '.$name;
});
Route::get('sayhello/{name?}', function ($name = 'vien') {
    echo 'Hello Lavarel! I am '.$name;
});
Route::get('product/add', function(){
	echo 'Thêm nội dung';
});
Route::get('product/edit', function(){
	echo 'Sửa nội dung';
});
Route::get('product/del', function(){
	echo 'Xóa nội dung';
});

Route::get('controller', 'MyFirstController@getController');

Route::get('controller/{stn}/{sth}', 'MySecondController@getController');

Route::get('view', 'MyFirstController@getView');
