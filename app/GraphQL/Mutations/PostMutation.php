<?php

namespace App\GraphQL\Mutations;

use App\Exceptions\GQLException;
use App\Services\Contracts\PostContract;
use App\Services\Contracts\UserContract;
use GraphQL\Type\Definition\ResolveInfo;
use Illuminate\Support\Arr;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class PostMutation
{

    protected $postService;

    public function __construct(PostContract $postService)
    {
        $this->postService = $postService;
    }

    public function createPostByVideoUrl($root, array $args, $context, $info)
    {
        $title = Arr::get($args,'title',null);
        $content = Arr::get($args,'content',null);
        $videoUrl = Arr::get($args,'videoUrl',null);
        $userId = Arr::get($args,'userId',null);
        $user = \App\User::find($userId);

        if($title && $videoUrl && $user){
            return $this->postService->downloadPornHubVideo($videoUrl,$title,$user,$content);
        }

        throw new GQLException('请填写完整信息');
    }
}
