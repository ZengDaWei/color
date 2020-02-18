<?php

namespace App\Jobs;

use App\Helpers\FFMpegUtil;
use App\Image;
use App\Video;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class MakeCover implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $videoId;

    /**
     * Create a new job instance.
     *
     * @param int $videoId
     */
    public function __construct(int $videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $video = Video::find($this->videoId);
        if (!$video){
            return null;
        }

//      视频文件存在本地
        if ($video->disk === 'local' && $video->relative_path && \Storage::exists($video->relative_path)){
            $filePath = sprintf('app/public/video_cover/%s.jpg','video_'.$video->id);
            $coverPath = FFMpegUtil::getCover(\Storage::path($video->relative_path),1,$filePath);

            $image = new Image();
            $image->path = $filePath;
            $image->hash = @md5_file($coverPath);
            list($width, $height) = getimagesize(storage_path($filePath));
            $image->width = $width;
            $image->height = $height;
            $image->extension = 'jpg';
            $image->save();

            $video->update(['cover_id' => $image->id]);
        }
    }
}
