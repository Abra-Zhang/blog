<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = post::orderby('created_at', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $post->author = DB::table("users")->where(['id' => $post->user_id])->value('name');
        return view('posts.show', compact('post'));
    }
}
