<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()){
            if(auth()->user()->role == 'admin'){
                return $next($request); // Continue to the admin dashboard
            } else {
                return redirect()->route('frontend.home')->with('error', 'You do not have access to the admin panel.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Please login to access the admin panel.');
        }
    }
}
