<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use JWTAuth;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        
        // $host=request()->getHttpHost();
        // // // if($subdomain!='localhost'&&!is_numeric ($subdomain)){
        // //       \Config::set('database.connections.mysql.database',$subdomain);
        // //       \DB::reconnect();
        // // }
        // //dd(\Auth::user());
        // $guestDomain=config('bimmunity.hosts.guest');
        // $url = $guestDomain."/api/getSubDomainInfo/".$host;
        // //$token =  JWTAuth::fromUser(\Auth::user()); 
        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        // CURLOPT_URL => $url ,
        // CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_ENCODING => "",
        // CURLOPT_MAXREDIRS => 10,
        // CURLOPT_TIMEOUT => 30,
        // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        // CURLOPT_CUSTOMREQUEST => "GET",
        // CURLOPT_HTTPHEADER => array(
        //     //"authorization: Bearer ".$token,
            
        //     "content-type: application/application/json"
            
        // ),
        // ));

        // $response = curl_exec($curl);
        // $err = curl_error($curl);

        // curl_close($curl);

        // if ($err) {
        // echo  "cURL Error #:" . $err;
        // } else {
        // if($response)
        // {
        //     $response = json_decode($response);
        //     \Config::set('database.connections.mysql.database',$response->db_name);
        //     \Config::set('database.connections.mysql.port',$response->port);
        //     \Config::set('database.connections.mysql.host',$response->host);
        //     \Config::set('database.connections.mysql.username',$response->username);
        //     \Config::set('database.connections.mysql.password',$response->password);
        //     \DB::reconnect();

        // }
        // }
       
            parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/web.php');
        });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
           'middleware' => 'api',
           'namespace' => $this->namespace."\\API",
           'prefix' => 'api',
           'as' => 'api.',
           ], function ($router) {
           require base_path('routes/api.php');
            });     
    }
}
