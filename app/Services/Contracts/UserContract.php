<?php

namespace App\Services\Contracts;

use App\User;

interface UserContract
{
    public function login(string $account,string $pwd):?User;
}
