<?php

namespace App\Http\Middleware;

use Brick\Math\BigInteger;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SellerActionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,BigInteger $id): Response
    {
        if (Auth::guard('seller')->check() && Auth::guard('seller')->id()==$id) {
            return $next($request);
        } 
        else 
        {
            return back()->with('error','Action Denied!');
        }
    }
}
