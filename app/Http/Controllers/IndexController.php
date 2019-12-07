<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        //可用文章（已发布文章）List key
        $listKey = "LIST:POSTS_ABLE";
        // 文章Hash key
        $hashKey = "HASH:POST";

        // 先检查Redis中是否存在可用文章
        if (Redis::exists($listKey)) {
            $lists = Redis::lrange($listKey, 0, -1);
            foreach ($lists as $postID) {
                $posts[] = Redis::hgetall($hashKey . $postID);
            }
        } else {
            // 若没有则从数据库中获取可用文章，并存如Redis
            $posts = Post::where('status', '1')->orderBy('created_at', 'desc')->orderBy('id', 'desc')->get();
            //处理文章作者名以及文章hashID
            foreach ($posts as $post) {
                $post['author'] = $post->user->name;
                $post['routeKey'] = $post->getRouteKey();
            }
            $posts = $posts->toArray();

            //将可用文章以及可用id存入Redis
            foreach ($posts as $post) {
                Redis::rpush($listKey, $post['id']);
                Redis::hmset($hashKey . $post['id'], $post);
            }
        }

        return view('index', [
            'posts' => $posts,
        ]);
    }
}
