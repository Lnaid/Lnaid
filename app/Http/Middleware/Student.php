<?php

namespace App\Http\Middleware;
use Silber\Bouncer\BouncerFacade as Bouncer;

use Closure;

class Student
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
        // if ($request->user()->role !== 'admin') {
        //     return redirect('/');
        // }
        // return $next($request);
        $user = $request->user();

        if(Bouncer::is($user)->a('student')){
            return $next($request);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized'
            ], 401);
        }
    }
}
