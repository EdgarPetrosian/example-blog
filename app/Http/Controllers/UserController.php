<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Models\User;

class UserController extends Controller
{


    /**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function showUserName()
    {
        $name = "User Name";
        return view('user.profile',['user_name' => $name]);
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
