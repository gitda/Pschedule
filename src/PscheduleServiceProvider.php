<?php

namespace Gitda\Pschedule;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;


class PscheduleServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupRoutes($this->app->router);
    }

    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Gitda\Pschedule\Http\Controllers'], function($router)
        {
            require __DIR__.'/Http/routes.php';
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}