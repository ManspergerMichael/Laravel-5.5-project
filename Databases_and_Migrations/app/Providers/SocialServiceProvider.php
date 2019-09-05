<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Twitter;

//every new service providerm must be registered in config\app.php
//Autoloaded Service Providers section
class SocialServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //dd('hello');
        $this->app->singleton(Twitter::class ,function () {
            return new Twitter('api-Key');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
