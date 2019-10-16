<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EditormdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    static public function uploadImage(Request $request)
    {
    	$json = [
            'success' => 0,
            'message' => '未知错误',
            'url' => '',
        ];
        // 判断是否有上传图片
        if ($request->hasFile('editormd-image-file')){

        	$file = $request->file('editormd-image-file');
        	$max = [
        		'editormd-image-file' => 'max:10240',
        	];
        	$message = [
        		'editormd-image-file.max' => '上传图片最大不能超过10M',
        	];
        	$validator = Validator::make($request->all(), $max, $message);

        	if ($validator->passes()) {
        		$dirPath = config("editormd.upload_path");
        		$uploadPath = $dirPath . date('Ymd', time());
        		// 若该路径没有文件夹，则创建
        		if(!is_dir($uploadPath)) {
        			mkdir($uploadPath, 0777, true);
        		}
        		$ext = $file->getClientOriginalExtension();
        		if (in_array($ext, ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'webp'])) {
        			$savePath = '/' . $uploadPath . '/' . uniqid() . '_' . date('s') . '.' . $ext;
                    if ($file->isValid()) {
                        $file->move($uploadPath, $savePath);
                        $json = array_replace($json, ['success' => 1, 'url' => $savePath]);
                    } else {
                        $json = array_replace($json, ['success' => 0, 'message' => '文件校验失败']);
                    }
        		} else {
        			$json = array_replace($json, ['success' => 0, 'message' => '文件类型不符合要求']);
        		}
        	} else {
        		$json = array_replace($json, ['success' => 0, 'meassge' => $validator->messages()]);
        	}
        }

    	return response()->json($json);
    }
}
