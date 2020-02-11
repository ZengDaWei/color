<?php

namespace App\Services;

use App\Helpers\FFMpegUtil;
use App\Services\Contracts\VideoContract;
use App\User;
use App\Video;
use Illuminate\Http\UploadedFile;

class VideoService implements VideoContract
{

    public static function uploadVideo(UploadedFile $file,User $user)
    {
        $hash = @md5_file($file);
        $video = new Video();

//        fill
        $video->hash = $hash;
        $video->disk = 'local';
        $video->type = 'normal';
        $video->user_id = $user->id;
        $video->save();
        $extension = '.' . $file->getClientOriginalExtension();

        $path = sprintf('public/video/%d%s', $video->id, $extension);
        $absPath = self::uploadFile($file,$path);

        $video->relative_path = $path;
        $video->absolute_path = $absPath;
        $video->duration = FFMpegUtil::getDuration($absPath);

        return $video;
    }

    public static function uploadFile(UploadedFile $file,string $path)
    {
        \Storage::put($path, file_get_contents($file->getRealPath()));
        return storage_path($path);
    }
}
