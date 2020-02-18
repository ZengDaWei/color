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

    // 截取
    public static function getCover($streamPath, $fromSecond, $path)
    {
        $ffmpeg = app('ffmpeg');
        $video  = $ffmpeg->open($streamPath);
        $frame  = $video->frame(TimeCode::fromSeconds($fromSecond)); //提取第几秒的图像

        $frame->save(storage_path($path));
        return storage_path($path);
    }
}
