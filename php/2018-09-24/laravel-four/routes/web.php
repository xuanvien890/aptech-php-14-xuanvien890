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
Route::get('hoclavarel',function(){
    echo"hello world";
});
Route::get('khoa-hoc',function(){
    return"Lap trinh web laravel 5";
});
Route::get('khoa-hoc/hoc-php',function(){
    return"aptech php 14";
});
Route::get('lap-trinh/{hoc}',function($hoc){
    return"khóa học aptech php: $hoc";
});
Route::get('khoa-hoc/{hoc}/{web}',function($hoc,$web){
   return"khoa hoc web: aptech $hoc web $web";
 });
 Route::get('youtube/{phim?}',function($phim = "one"){
     return $phim;
 });
 Route::get('call-view',function(){
     $hoten='Trần xuân viễn';
     return view('view',compact('hoten'));
 });
 Route::get('call-index',function(){
    return view('index');
});
Route::get('call-login',function(){
    return view('login');
});
Route::get('test-controller','Controller@testAction');