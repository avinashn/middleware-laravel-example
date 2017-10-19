<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
class SuperAdminMiddleware
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
        if ($request->user() && $request->user()->type != 'super_admin')
        {
            return new Response(view('unauthorized')->with('role', 'SUPER ADMIN'));
        }
        return $next($request);
    }
}
