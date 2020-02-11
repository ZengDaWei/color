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
        $this->app->singleton('ffmpeg', function ($app) {
            return \FFMpeg\FFMpeg::create([
                'ffmpeg.binaries'  => [
                    '/usr/local/bin/ffmpeg',
                    '/usr/local/ffmpeg/bin/ffmpeg',
                    '/usr/bin/ffmpeg',
                ],
                'ffprobe.binaries' => [
                    '/usr/local/bin/ffprobe',
                    '/usr/local/ffmpeg/bin/ffprobe',
                    '/usr/bin/ffprobe',
                ],
            ]);
        });
        $this->app->singleton('ffprobe', function ($app) {
            return \FFMpeg\FFProbe::create([
                'ffprobe.binaries' => [
                    '/usr/local/bin/ffprobe',
                    '/usr/local/ffmpeg/bin/ffprobe',
                    '/usr/bin/ffprobe',
                ],
            ]);
        });
    }
}
