<?php

namespace App\GraphQL\Mutations;

use App\Device;
use App\Exceptions\GQLException;
use App\Repo\UserRepo;
use App\Services\Contracts\UserContract;
use Illuminate\Support\Arr;

class UserMutation
{

    protected $userService;

    protected $phonePreg = '/^1\d{10}$/';

    public function __construct(UserContract $userService)
    {
        $this->userService = $userService;
    }

    public function login($root, array $args, $context, $info)
    {
        $phone = Arr::get($args, 'phone', null);
        $pwd   = Arr::get($args, 'pwd', null);

//        效验
        if(!$phone || !$pwd){
            throw new GQLException('确认信息输入完整');
        }

        if (!preg_match($this->phonePreg, $phone)) {
            throw new GQLException('手机号格式不正确');
        }

//        注册 or null
        $user = $this->userService->login($phone,$pwd);

        if($user === null) {
            throw new GQLException('密码错误');
        }

//        注册
        Device::create([
            'user_id' => $user->id,
            'name' => Arr::get($args, 'deviceName', null),
            'os' => Arr::get($args, 'os', null),
            'position' => Arr::get($args, 'position', null),
            'uuid' => Arr::get($args, 'uuid', null),
            'ip' => UserRepo::getIp()
        ]);

        return $user;
    }
}
