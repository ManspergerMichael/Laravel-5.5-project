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
        //a singleton is a function that runs once and returns that output each time the function is called

        $this->app->singleton('foo' ,function () {
            return 'bar';
        });
        /*
        This for example creates an instance of the Twitter class that holds the api key
         and this key will be accessable to the rest of the project
         $this->app->singleton(Twitter::class ,function () {
            return new Twitter('api-Key');
        });
         */
        //registering a interface and class like this is acceptible, but not best practice
        $this->app->bind(
            \App\Repositories\UserRepository::class, //use this interface
            \App\Repositories\DbUserRepository::class //with this class implementation
        );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     * boot is run after Laravel is sut up and ready
     */
    public function boot()
    {
        //
    }
}
