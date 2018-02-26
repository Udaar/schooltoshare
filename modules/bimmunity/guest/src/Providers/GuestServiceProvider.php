<?php

namespace Bimmunity\Guest\Providers;

use Illuminate\Support\ServiceProvider;

class GuestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();
        $this->registerMigrations();
        $this->registerViews();
        $this->registerAssets();
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/bimmunity/guest'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function registerRoutes()
    {
        include __DIR__.'/../Http/routes.php';
    }

    /**
     * Register module migrations.
     */
    protected function registerMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    /**
     * Register module views.
     */
    protected function registerViews()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'guest');
    }
    protected function registerAssets()
    {
        $this->publishes([
        __DIR__.'/../../public/assets' => public_path('assets'),
    ], 'assets');
    }
}
