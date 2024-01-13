<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user is an admin
        if (Auth::check() && Auth::user()->isAdmin) {
            return $next($request);
        }

        // Redirect if not admin
        return redirect('home')->with('error', 'You do not have access to this page');
    }
}