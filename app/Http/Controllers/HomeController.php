<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function home()
    {
        $articles = Article::orderby('created_at', 'desc')->paginate(10);
//        return 'home';
        return view('index', compact('articles'));
    }
}
