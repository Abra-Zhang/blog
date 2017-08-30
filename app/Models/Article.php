<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'user_id', 'content',
    ];
    /*
        指明一篇文章属于一个用户
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
