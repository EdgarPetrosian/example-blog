<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{


    /**
     * Show the posts.
     *
     * @return Response
     */
    public function showWelcomeContent()
    {
        return view('welcome');
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }
}
