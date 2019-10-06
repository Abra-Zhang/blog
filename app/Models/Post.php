<?php

namespace App\Models;

// use App\Http\Traits\Hashidable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use Hashidable;

    /**
     * 获得此博文的作者。
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
