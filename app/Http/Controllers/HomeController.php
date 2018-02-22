<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function home()
    {
        $posts = post::orderby('created_at', 'desc')->paginate(10);
        return view('index', compact('posts'));
    }

    public function tags()
    {
        return "tags index";
    }
}
