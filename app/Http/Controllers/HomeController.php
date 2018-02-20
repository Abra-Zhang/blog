<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        $articles = Article::orderby('created_at', 'desc')->paginate(10);
        $tags = [];
//        return 'home';
        return view('index', compact('articles', 'tags'));
    }
}
