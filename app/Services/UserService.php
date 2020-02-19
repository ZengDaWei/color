<?php

namespace App\Services;

use App\Repo\UserRepo;
use App\Services\Contracts\UserContract;
use App\User;

class UserService implements UserContract
{

    public function login(string $phone, string $pwd):?User
    {
        $user = UserRepo::getUser($phone);
//        注册过
        if ($user && !password_verify($pwd, $user->password)) {
            return null;
        }

        if($user){
            return $user;
        }
        $user = UserRepo::createUser($phone,$pwd);
        return $user;
    }
}
