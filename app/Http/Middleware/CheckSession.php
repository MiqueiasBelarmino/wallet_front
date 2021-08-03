<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSession
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
        if ((session('user') == null || session('user') == '') && (session('access_token') == null || session('access_token') == '')) {
            return  redirect()->route('login');
        }
        return $next($request);
    }
}
