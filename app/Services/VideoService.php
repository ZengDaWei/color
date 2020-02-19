<?php

namespace App\Services;

use App\Helpers\FFMpegUtil;
use App\Jobs\MakeCover;
use App\Services\Contracts\VideoContract;
use App\User;
use App\Video;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;

class VideoService implements VideoContract
{

    public static function uploadVideoByVideoUrl(string $videoPath,User $user)
    {
        $hash = @md5_file($videoPath);
        $video = new Video();

//        fill
        $video->hash = $hash;
        $video->disk = 'local';
        $video->type = 'normal';
        $video->user_id = $user->id;
        $video->save();
        $path = sprintf('public/video/%d%s', $video->id, '.mp4');
        $absPath = self::uploadFile($videoPath,$path);
        $video->relative_path = $path;
        $video->absolute_path = $absPath;

        $videoInfo = FFMpegUtil::getVideoInfo($absPath);

        $video->duration = Arr::get($videoInfo,'duration',null);
        $video->width = Arr::get($videoInfo,'width',null);
        $video->height = Arr::get($videoInfo,'height',null);

        $video->save();
        dispatch(new MakeCover($video->id));

        return $video;
    }

    public static function uploadVideo(UploadedFile $file,User $user)
    {
        $hash = @md5_file($file->getRealPath());
        $video = new Video();

//        fill
        $video->hash = $hash;
        $video->disk = 'local';
        $video->type = 'normal';
        $video->user_id = $user->id;
        $video->save();
        $extension = '.' . $file->getClientOriginalExtension();

        $path = sprintf('public/video/%d%s', $video->id, $extension);
        $absPath = self::uploadFile($file->getRealPath(),$path);

        $video->relative_path = $path;
        $video->absolute_path = $absPath;

        $videoInfo = FFMpegUtil::getVideoInfo($absPath);

        $video->duration = Arr::get($videoInfo,'duration',null);
        $video->width = Arr::get($videoInfo,'width',null);
        $video->height = Arr::get($videoInfo,'height',null);

        $video->save();
        dispatch(new MakeCover($video->id));

        return $video;
    }

    public static function uploadFile($fileUrl,string $path)
    {
        \Storage::put($path, file_get_contents($fileUrl));
        return \Storage::path($path);
    }
}
