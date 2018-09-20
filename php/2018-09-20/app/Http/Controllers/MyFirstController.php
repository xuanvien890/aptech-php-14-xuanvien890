<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    //
    public function getController(){
        echo 'Hello laravel. This is my first controller';
       }
  public function getView(){
     return view('MyFirstView');
    }
    }
