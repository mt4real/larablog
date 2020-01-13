<?php

namespace App\Http\Middleware;
use Closure;
use Session;

class UserLogin
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
        if (empty(Session::has('UserLoginSession'))) {
            
            return redirect('/user-login');
        }
        return $next($request);
    }
}
