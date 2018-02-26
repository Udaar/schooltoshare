<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Bimmunity\Ticketing\Models\TicketAction;
class RedirectFormBuilder
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
    
        $route_path = $request->path();  
        $ticket_actions=TicketAction::where('action_type_id','=',1)->get();
        foreach($ticket_actions as $action)
        {
            $nam = $action->name;
            if(substr($nam,-1) != 's'){
                $nam = $nam.'s';
            }
           if(lcfirst(str_replace(' ', '',ucwords(strtolower($nam)))) == $route_path)
           {
               return redirect()->to('tickets/index');
           }
          
        }

        return $next($request);
    }
}
