<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where('status', '1')->orderBy('created_at', 'desc')->paginate(5);
//        $page = $request->page?$request->page : 1;
        return view('index',[
            'posts' => $posts,
//            'page' => $page
        ]);
    }
}
