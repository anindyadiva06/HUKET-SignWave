<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleRedirect
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
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->hasRole('admin')) {
                return redirect()->route('dashboard-admin');
            } elseif ($user->hasRole('user')) {
                return redirect()->route('home-user');
            }
        }

        // Default behavior if user is not authenticated or does not have a role
        return $next($request);
    }
}
