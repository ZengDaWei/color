<?php

namespace App\Services;

use App\Jobs\DownloadVideo;
use App\Post;
use App\Services\Contracts\PostContract;
use App\User;

class PostService implements PostContract
{

    public function downloadPornHubVideo(string $videoUrl, string $title, User $user, $content = null)
    {
        $post = Post::create([
            'title' => $title,
            'user_id' => $user->id,
            'content' => $content,
        ]);
        dispatch(new DownloadVideo($post->id,$videoUrl));
        return $post;
    }
}
