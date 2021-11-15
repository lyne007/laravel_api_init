<?php

namespace App\Http\Middleware\Api;

use Closure;
use Illuminate\Http\Request;

class AdminGuardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        config(['auth.defaults.guard'=>'admin']);
        return $next($request);
    }
}
