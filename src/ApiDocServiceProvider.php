<?php

namespace Hoaid\ApiDoc;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ApiDocServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Publish configuration file
        $this->publishes([
            __DIR__.'/../config/apidoc.php' => config_path('apidoc.php'),
        ], 'apidoc-config');

        // Load Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'apidoc');

        // Load Routes
        $this->registerRoutes();
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/apidoc.php', 'apidoc'
        );
    }

    /**
     * Register the package routes.
     */
    protected function registerRoutes(): void
    {
        Route::group([
            'prefix' => config('apidoc.route', '/api-docs'),
            'middleware' => 'web', // Adjust as necessary
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }
}
