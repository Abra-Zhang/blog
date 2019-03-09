<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.home');
    }

    public function posts()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(20);
        return view('dashboard.posts', [
            'posts' => $posts,
        ]);
    }
}
