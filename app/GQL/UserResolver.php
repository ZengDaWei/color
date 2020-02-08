<?php

namespace App\GQL;

class UserResolver 
{
    protected $service;

    public function __construct($service)
    {
        $this->service = $service;
    }
}
