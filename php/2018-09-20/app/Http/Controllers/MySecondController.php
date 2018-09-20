<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySecondController extends Controller
{
    //
    public function getController($stn, $sth){
    	$tong = $stn+$sth;
    	return $tong;
    }
}
