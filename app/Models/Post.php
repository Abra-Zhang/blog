<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'user_id', 'content', 'abstract', 'banner',
    ];
    /*
        指明一篇文章属于一个用户
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany('Tag', 'posts_to_tags', 'post_id', 'tag_id');
    }
}
