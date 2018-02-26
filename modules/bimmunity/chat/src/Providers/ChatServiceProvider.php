<?php

namespace Bimmunity\Chat\Providers;

use Illuminate\Support\ServiceProvider;

class ChatServiceProvider extends ServiceProvider
{
    protected $namespace = 'bimmunity/chat';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'chat');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations', 'chat');
        $this->registerRoutes();
        $this->registerMigrations();
        $this->registerViews();
        $this->registerAssets();
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
        $migrationsDir = __DIR__ . '/../../database/migrations';

        if (file_exists($migrationsDir)) {
            $this->publishes([
                $migrationsDir => database_path('migrations'),
            ], 'migrations');
        }
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
    protected function registerAssets()
    {
       $assetssDir = __DIR__ . '/../../public';

         $this->publishes([
            $assetssDir => public_path($this->namespace),
        ], 'public');
    }
}
