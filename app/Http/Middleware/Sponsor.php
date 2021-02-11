<?php

namespace App\Http\Middleware;
use Silber\Bouncer\BouncerFacade as Bouncer;

use Closure;

class Sponsor
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
        $user = $request->user();

        if(Bouncer::is($user)->a('sponsor')){
            return $next($request);
        }else{
            return redirect()->route('dashboard');
        }
    }
}
