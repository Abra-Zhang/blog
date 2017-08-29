<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
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
        $articles = Article::paginate(30);
        return view('articles.index', compact('articles'));
    }

    public function create()
    {

    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function store(Request $request)
    {

    }

    public function edit(Article $article)
    {
        var_dump($user);exit;
        return view('articles.edit', compact('articles'));
    }

    public function update(Article $article, Request $request)
    {

    }

    public function destroy(Article $article)
    {
        $this->authorize('destroy', $article);
        $article->delete();
        session()->flash('success', '文章已被成功删除！');
        return redirect()->back();
    }
}
