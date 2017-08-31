<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Article;
use Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {

        $this->middleware('guest', [
            'only' => ['index, show']
        ]);
    }

    /*
        文章列表
    */
    public function index()
    {
        $articles = Article::orderby('created_at', 'desc')->paginate(30);
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        $this->authorize('create', Article::class);
        return view('articles.create');
    }

    public function show(Article $article)
    {
        $article->author = DB::table("users")->where(['id' => $article->user_id])->value('name');
        return view('articles.show', compact('article'));
    }

    public function store(Request $request)
    {
        $this->authorize('create', Article::class);
        $this->validate($request, [
            'content' => 'required',
            'abstract' => 'required',
        ]);
        if (!isset($request->title)) {
            $request->title = '无题';
        }
        if (!isset($request->banner)) {
            $request->banner = '#';
        }

        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'abstract' => $request->abstract,
            'banner' => $request->banner,
            'user_id' => $request->user_id,
        ]);

        session()->flash('success', '文章添加成功');
        return redirect()->route('articles.index');
    }

    public function edit(Article $article)
    {
        $this->authorize('update', $article);
        return view('articles.edit', compact('article'));
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
