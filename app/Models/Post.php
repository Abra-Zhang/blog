<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * 获得此博文的作者。
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
