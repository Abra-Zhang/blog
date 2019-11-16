<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')
            ->except([
                'index', 'show'
            ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('status', '1')->orderBy('created_at', 'desc')->orderBy('id', 'desc')->simplePaginate(10);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = $request->input('userId');
        if ($post->save()) {
            return ['code' => 0, 'msg' => 'success'];
        } else {
            return ['code' => 1, 'msg' => 'fail'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // get next post id
        $next = Post::where([
            ['created_at', '<', $post->created_at],
            ['status', '=', '1'],
            ['id', '!=', $post->id]
        ])->latest()->orderBy('id', 'desc')->first();

        // get previous post id
        $previous = Post::where([
            ['created_at', '>', $post->created_at],
            ['status', '=', '1'],
            ['id', '!=', $post->id]
        ])->oldest()->orderBy('id', 'asc')->first();

        return view('posts.show', [
            'post' => $post,
            'previous' => $previous ? Post::find($previous->id) : false,
            'next' => $next ? Post::find($next->id) : false,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $action = $request->input('action');
        switch ($action) {
            case 'publish':
                $post->status = !$post->status;
                $post->timestamps = false;
                if ($post->save()) {
                    return ['code' => 0, 'msg' => 'success'];
                } else {
                    return ['code' => 1, 'msg' => 'fail'];
                }
                break;

            case 'edit':
                $post->title = $request->input('title');
                $post->content = $request->input('content');
                if ($post->save()) {
                    return ['code' => 0, 'msg' => 'success'];
                } else {
                    return ['code' => 1, 'msg' => 'fail'];
                }
                break;

            default:
                return ['code' => 1, 'msg' => 'fail'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
