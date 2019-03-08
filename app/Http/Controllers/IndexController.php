<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where('status', '1')->orderBy('created_at', 'desc')->simplePaginate (5);
        return view('index',[
            'posts' => $posts,
        ]);
    }
}
