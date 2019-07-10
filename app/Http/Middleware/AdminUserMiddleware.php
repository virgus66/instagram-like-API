<?php

namespace App\Http\Middleware;

use Closure;

class AdminUserMiddleware
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
        // 1) create middleware
        // 2) update kernel in Http folder. $middleware arr run all contained middlewares globally with each request
        //    or $routeMiddleware to be called on specific routes by calling ->middleware('middleware_key')
        return $next($request);
    }
}
