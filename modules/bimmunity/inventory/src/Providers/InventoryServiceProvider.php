<?php

namespace Bimmunity\Inventory\Providers;

use Illuminate\Support\ServiceProvider;

class InventoryServiceProvider extends ServiceProvider
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
            __DIR__.'/views' => base_path('resources/views/bimmunity/inventory'),
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
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'inventory');
    }
    protected function registerAssets()
    {
        $this->publishes([
        __DIR__.'/../../public/assets' => public_path('assets'),
    ], 'assets');
    }
}
