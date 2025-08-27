<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MultiAuth
{
    public function handle($request, Closure $next, ...$guards)
    {
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Set the active guard for this request
                Auth::shouldUse($guard);
                return $next($request);
            }
        }

        // Not authenticated in any guard, redirect
        return redirect()->route('login'); // or employee.login
    }
}
