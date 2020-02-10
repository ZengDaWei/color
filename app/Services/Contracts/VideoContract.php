<?php

namespace App\Services\Contracts;

use App\User;
use Illuminate\Http\UploadedFile;

interface VideoContract
{
    public static function uploadFile(UploadedFile $file,string $path);
    public static function uploadVideo(UploadedFile $file,User $user);
}
