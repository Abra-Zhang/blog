<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        return 'articles index';
    }

    public function show(Article $article)
    {
//        var_dump($article->id);exit;
        $article->author = DB::table("users")->where(['id' => $article->user_id])->value('name');
        return view('articles.show', compact('article'));
    }
}
