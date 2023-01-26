<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function aboutContent()
    {
        $about_title = "About";
        return view('about',['about_title'=>$about_title]);
    }
}
