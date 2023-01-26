<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PostsController extends Controller
{


    /**
     * Show the posts.
     *
     * @return Response
     */
    public function showPosts()
    {
        $show_post = "This Our Posts";
        return view('posts.show_posts',['show_post' => $show_post]);
    }
    public function addPosts()
    {
        $add_post = "Add Posts";
        return view('posts.add_posts',['add_post' => $add_post]);
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
