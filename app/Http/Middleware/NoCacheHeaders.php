<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NoCacheHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $response = $next($request);

        // return $response->header('Cache-Control', 'no-cache, no-store, must-revalidate')
        //                 ->header('Pragma', 'no-cache')
        //                 ->header('Expires', '0');
    }
}
