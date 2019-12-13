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
        if ($guard == 'kasir'){
            if (Auth::guard($guard)->check()){
                return redirect('/kasir/home');
            }
        }
        else {
            if (Auth::guard($guard)->check()) {
                return redirect('/home');
        }
    }
        return $next($request);
    }
}
