<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MyHomeController extends Controller
{
    public function myHomeContent()
    {
        $my_home_title = "Home";
        return view('myhome',['home_title'=>$my_home_title]);
    }
}
