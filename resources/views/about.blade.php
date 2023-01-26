<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="css/addposts.css" rel="stylesheet" >
       
    </head>
    <body class="antialiased">
        <div class="wraper">
            <div class="htitle"><h2>{{$about_title}}</h2></div>
            <ul>
              <li><a class="active" href="/myhome">Home</a></li>
              <li><a href="/show_posts">Show Posts</a></li>
              <li><a href="/add_posts">Add Posts</a></li>
              <li><a href="/about">About</a></li>
            </ul>
        </div>
    </body>
</html>
