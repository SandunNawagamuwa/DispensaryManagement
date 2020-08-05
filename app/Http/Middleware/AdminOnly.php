<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminOnly
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
        if(Auth::user()->hasAnyRole('admin')){
            return $next($request);
        };

        return back();

    }
}
