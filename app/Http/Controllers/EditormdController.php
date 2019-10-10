<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditormdController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    static public function uploadImage()
    {
    	return [
    		'success' => 1,           // 0 表示上传失败，1 表示上传成功
		    'message' => "提示的信息，上传成功或上传失败及错误信息等。",
		    'url' => "图片地址"        // 上传成功时才返回
    	];
    }
}
