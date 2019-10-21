<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use zgldh\QiniuStorage\QiniuStorage;

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
            'message' => '',
            'url' => '',
        ];
        $uploadType = config('editormd.upload_type');
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
        		$ext = $file->getClientOriginalExtension();
        		if (in_array($ext, ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'webp'])) {
        			if ($file->isValid()) {
                        switch ($uploadType) {
                        	case 'local':
				        		// 若该路径没有文件夹，则创建
				        		if(!is_dir($uploadPath)) {
				        			mkdir($uploadPath, 0777, true);
				        		}
                        		$savePath = '/' . $uploadPath . '/' . uniqid() . '_' . date('s') . '.' . $ext;
                        		$file->move($uploadPath, $savePath);
                        		$json = array_replace($json, ['success' => 1, 'url' => $savePath]);
                        		break;
                        	
                        	case 'qiniu':
                        		$disk = QiniuStorage::disk('qiniu');
                        		$savePath = $uploadPath . '/' . uniqid() . '_' . date('s') . '.' . $ext;
                        		$result = $disk->put($savePath, file_get_contents($file));;
                        		if ($result) {
	                        		if (config("editormd.upload_http") === 'https') {
			                            $realurl = $disk->downloadUrl($savePath, 'https');
			                        } else {
			                            $realurl = $disk->downloadUrl($savePath);
			                        }
			                        $json = array_replace($json, ['success' => 1, 'url' => $realurl]);
                        		}else {
                        			$json = array_replace($json, ['success' => 0, 'meassge' => '上传七牛失败']);
                        		}

                        		break;

                        	default:
                        		# code...
                        		break;
                        }
                    } else {
                        $json = array_replace($json, ['success' => 0, 'message' => 'file unvalid']);
                    }
        		} else {
        			$json = array_replace($json, ['success' => 0, 'message' => 'wrong ext']);
        		}
        	} else {
        		$json = array_replace($json, ['success' => 0, 'meassge' => $validator->messages()]);
        	}
        }
        $json = array_replace($json, ['success' => 0, 'meassge' => 'no file']);
    	return response()->json($json);
    }
}
