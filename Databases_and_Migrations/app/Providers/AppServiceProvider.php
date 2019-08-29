<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Twitter;

class AppServiceProvider extends ServiceProvider
{

    /*
        This service provider is used to register functions to the provider at startup and run functions at boot
    */
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //this binds and registers a function to the service provider
        $this->app->singleton(Twitter::class ,function () {
            return new Twitter('api-key');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
