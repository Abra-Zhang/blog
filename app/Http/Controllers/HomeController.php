<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function home()
    {
        $posts = post::orderby('created_at', 'desc')->paginate(10);
//        return 'home';
        return view('index', compact('posts'));
    }
}
