<?php

namespace App\Http\Middleware;

use Closure;
use Agent;

class RedirectIfDesktop
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
<<<<<<< HEAD:app/Http/Middleware/browse.php
        // $agent = new Agent();
        // if($agent->isDesktop())
        // {
        //     return redirect('/');
        // }
=======
        if (Agent::isDesktop())
        {
            return redirect('/');
        }
>>>>>>> dc66eba75a566a53404b6b3e2c46b083115ea367:app/Http/Middleware/RedirectIfDesktop.php
        return $next($request);
    }
}
