<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerSingleObject();
    }

    public function registerSingleObject()
    {
        // register ffmpeg and ffprobe
        $this->app->singleton('ffmpeg', function ($app) {
            return \FFMpeg\FFMpeg::create([
                'ffmpeg.binaries'  => [
                    exec('which ffmpeg'),
                ],
                'ffprobe.binaries' => [
                    exec('which ffprobe'),
                ],
            ]);
        });
        $this->app->singleton('ffprobe', function ($app) {
            return \FFMpeg\FFProbe::create([
                'ffprobe.binaries' => [
                    exec('which ffprobe'),
                ],
            ]);
        });
    }
}
