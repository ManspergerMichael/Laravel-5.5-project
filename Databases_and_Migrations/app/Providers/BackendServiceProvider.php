<?php

namespace App\Providers;

/*
    This provider was created to be an example for the lession
*/

class BackendServiceProvider extends ServiceProvider
{
    public function register()
    {
        //If I ever use a type hint for a interface, you still need to wire up the concrete class to it
       $this->app->bind(
           \App\Repositories\UserRepositoryInterface::class, //use this interface
           \App\Repositories\DbUserRepository::class //with this class implementation
       );
    }
}
