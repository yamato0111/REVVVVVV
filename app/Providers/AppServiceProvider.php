<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        //
    }

    public function boot()
    {
        \URL::forceScheme('https');
        Paginator::useBootstrap();
        $this->app['request']->server->set('HTTPS','on');
    }
}
