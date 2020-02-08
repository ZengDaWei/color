<?php

namespace App\Repo;

use App\Device;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Str;

class UserRepo extends Facade
{
    public static function getUser(string $phone)
    {
        $user = User::where('account',$phone)->orWhere('phone',$phone)->first();
        return $user ?? null;
    }

    public static function createUser(string $account,string $pwd):User
    {
        $user = User::create([
            'name' => '匿名战斗狂人',
            'account' => $account,
            'jwt' => now()->timestamp.'-'.Str::random(45),
            'password' => bcrypt($pwd),
        ]);

        Profile::create([
            'user_id' => $user->id,
            'ip' => self::getIp(),
            'source' => 'app',
        ]);

        return $user;
    }
    public static function getIp()
    {
        $ip = null;
        if (getenv('HTTP_CLIENT_IP')) {
            $ip = getenv('HTTP_CLIENT_IP');
        } else if (getenv('HTTP_X_FORWARDED_FOR')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        } else if (getenv('REMOTE_ADDR')) {
            $ip = getenv('REMOTE_ADDR');
        }
        return $ip;
    }
}
