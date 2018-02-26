<?php

namespace Bimmunity\SendEmail\Providers;

use Illuminate\Support\ServiceProvider;

class SendEmailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
     protected $namespace = 'bimmunity/send_email';

    public function boot()
    {
        $this->registerRoutes();
        $this->registerMigrations();
        $this->registerViews();
        $this->registerAssets();
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/bimmunity/send_email'),
        ]);
        // $this->publishes([
        // __DIR__ . '../../database/migrations' => $this->app->databasePath() . '../../database/migrations'
        //    ], 'migrations');
        //  $this->loadMigrationsFrom(__DIR__.'/path/to/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {   
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
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'send_email');
    }
    protected function registerAssets()
    {
        $assetssDir = __DIR__ . '/../../public';

         $this->publishes([
            $assetssDir => public_path($this->namespace),
        ], 'public');
    }
}
