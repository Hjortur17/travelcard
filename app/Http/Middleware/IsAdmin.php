<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class IsAdmin
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
        if (Auth::user() && Auth::user()->role == 'Eigandi' || Auth::user() && Auth::user()->role == 'Forritari') {
            return $next($request);
        }

        return redirect()->route('dashboard');
    }
}
