<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Contracts\VideoContract;
use App\Services\VideoService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;

class VideoController extends Controller
{


    public static function uploadVideo(Request $request)
    {
        $file = $request->file('file');

        if (self::validVideo($file) === false){
            return '视频格式不合法';
        }

        $userId = (int) $request->all()['user_id'];
        $user = User::find($userId);

        $path = VideoService::uploadVideo($file,$user);
        dd($path);
    }

    public static function validVideo(UploadedFile $file):bool
    {
        if(!$file){
            return false;
        }
        $extend = $file->getClientOriginalExtension();

        return in_array($extend,['mp4','fmp']);
    }
}
