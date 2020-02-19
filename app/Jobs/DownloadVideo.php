<?php

namespace App\Jobs;

use App\Post;
use App\Services\VideoService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DownloadVideo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $post;
    protected $user;
    protected $videoUrl;

    public $timeout = 1800;

    /**
     * Create a new job instance.
     *
     * @param $postId
     * @param string $videoUrl
     */
    public function __construct($postId,string $videoUrl)
    {
        $this->post = Post::find($postId);
        $this->user = $this->post->user;
        $this->videoUrl = $videoUrl;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle():void
    {
        $video = VideoService::uploadVideoByVideoUrl($this->videoUrl,$this->user);
        $video->update([
            'used_type' => 'posts',
            'used_id' => $this->post->id,
        ]);
    }
}
