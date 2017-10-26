<?php

namespace App\Http\Middleware;

use Closure;

class DashboardAuth
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next)
    {
        if ( auth()->check() && auth()->user()->isSupperAdmin() )
        {
            return $next($request);
        }else{
            return redirect()->route('dashboard.showLoginForm');
        }
    }
}
