<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class boss
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
        if (Auth::user()->usertype == 'admin' || Auth::user()->usertype == 'member_bde' ) {
            return $next($request);
        }else{
            return redirect('/')->with('Sorry but you are Not Admin of Unity Construction');

        }
    }
}
