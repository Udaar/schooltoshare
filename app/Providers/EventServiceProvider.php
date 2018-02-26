<?php

namespace App\Providers;

use App\Listeners\UploadListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    // protected $listen = [
    //     'App\Events\SomeEvent' => [
    //         'App\Listeners\EventListener',
    //     ],
    //      'Unisharp\Laravelfilemanager\Events\ImageWasUploaded' => [
    //         'App\Listeners\UploadListener'
    //     ],
    // ];
    protected $subscribe = [
        UploadListener::class
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}