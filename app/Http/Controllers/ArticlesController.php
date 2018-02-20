<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        return 'articles index';
    }

    public function show(Request $request){
        return 'article show id: ' . $request->article_id;
    }
}
