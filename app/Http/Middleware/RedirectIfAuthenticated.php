<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        $action=class_basename(\Route::currentRouteAction());
         $host=request()->getHttpHost();
        $subdomain=explode('.',$host)[0];
        if(Auth::user()){
            // if(!Auth::user()->hassystem($subdomain))
            // abort(403,'un authorized');
            // if(!Auth::user()->can($action)){
            //     return redirect('/');
            // }
        }
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/');
        // }

        return $next($request);
    }
}
