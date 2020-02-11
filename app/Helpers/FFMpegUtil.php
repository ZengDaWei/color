<?php

namespace App\Helpers;

use FFMpeg\Coordinate\TimeCode;

class FFMpegUtil
{

    // 获取视频信息
    public static function getVideoInfo($streamPath)
    {
        $ffprobe = app('ffprobe');
        $stream  = $ffprobe->streams($streamPath)->videos()->first();
        return $stream ? $stream->all() : [];
    }

    public static function getDuration($streamPath){
        $info = self::getVideoInfo($streamPath);
        $duration = array_get($info, 'duration');
        $duration = $duration > 0 ? ceil($duration) : $duration;
        return $duration;
    }

    // 截取
    public static function getCover($streamPath, $fromSecond, $video_id)
    {
        $ffmpeg = app('ffmpeg');
        $video  = $ffmpeg->open($streamPath);
        $frame  = $video->frame(TimeCode::fromSeconds($fromSecond)); //提取第几秒的图像
        // cover/1.jpg
        $fileName = 'cover/' . $video_id . '.jpg';

        if (!is_dir(storage_path('cover'))) {
            mkdir(storage_path('cover'), 0777);
        }

        $frame->save(storage_path($fileName));
        return $fileName;
    }
}
