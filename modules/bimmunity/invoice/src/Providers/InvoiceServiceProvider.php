<?php

namespace Bimmunity\Invoice\Providers;

use Illuminate\Support\ServiceProvider;

class InvoiceServiceProvider extends ServiceProvider
{
    protected $namespace = 'bimmunity/invoice';

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

    /**
     * Register module routes
     */
    protected function registerRoutes()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/../Http/routes.php';
        }
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
        $viewsDir = __DIR__ . '/../../resources/views';

        if (file_exists($viewsDir)) {
            $this->publishes([
                $viewsDir => resource_path('views/' . $this->namespace),
            ]);
            $this->loadViewsFrom(
                $viewsDir, $this->namespace);
        }
    }
}
