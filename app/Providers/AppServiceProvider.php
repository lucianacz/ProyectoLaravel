<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{


     public function boot()
     {
       \URL::forceScheme('https');
       //URL::forceScheme('https');
       $this->app['request']->server->set('HTTPS','on');
       //$this->app['request']->server->set('https', 'on');
     }

     /**
      * Bootstrap any application services.
      *
      * @return void
      */

    public function register()
    {
        //
    }


}
