<?php

namespace App\Services\Contracts;

use App\User;

interface PostContract
{
    public function downloadPornHubVideo(string $videoUrl,string $title,User $user,$content = null);
}
