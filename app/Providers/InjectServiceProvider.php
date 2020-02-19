<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InjectServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register():void
    {
        $this->app->bind(\App\Services\Contracts\UserContract::class, \App\Services\UserService::class);
        $this->app->bind(\App\Services\Contracts\PostContract::class, \App\Services\PostService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot():void
    {
        //
    }
}
