<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Privilege;
use Illuminate\Support\Facades\Schema;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
          'App\Model' => 'App\Policies\ModelPolicy',
          '\Bimmunity\Ticketing\Models\Request' => 'App\Policies\RequestPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // if (Schema::hasTable('privileges')) {
        //   $permissions=Privilege::all();
        //     $this->registerPolicies();
        //     foreach ($permissions as  $permission) {
        //         Gate::define($permission->name, function ($user) use ($permission) {
        //             return ($user->email=='admin@udaar.org')?true:$user->hasPermission($permission);
        //             // return $user->hasPermission($permission);
        //         });
        //    }
        // } 
         
    }
}
