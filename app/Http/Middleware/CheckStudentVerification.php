<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\StudentVerification;

class CheckStudentVerification
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
        $verifyStatus = StudentVerification::where('user_id', $user->id)->first();

        if($verifyStatus == null){

            return back()->with('error', 'Please complete your verification');

        } elseif (!$verifyStatus->bvn_verify || !$verifyStatus->nin_verify || !$verifyStatus->school_id_verify || !$verifyStatus->admission_letter_verify){

            return back()->with('error', 'Please complete your verification');

        } else {

            return $next($request);

        }
    }
}
