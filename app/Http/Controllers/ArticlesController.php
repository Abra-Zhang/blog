<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['show']
        ]);

        $this->middleware('guest', [
            'only' => ['index, show']
        ]);
    }

    /*
        文章列表
    */
    public function index()
    {

    }

    public function create()
    {

    }

    public function show(Article $article)
    {

    }

    public function store(Request $request)
    {

    }

    public function edit(Article $article)
    {

    }

    public function update(Article $article, Request $request)
    {

    }
}
