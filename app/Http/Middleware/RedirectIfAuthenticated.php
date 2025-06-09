<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user = Auth::user();
            \Log::info('Pengguna terautentikasi:', ['user' => $user, 'role' => $user->role]);

            if ($user->role == 'admin') {
                \Log::info('Mengalihkan ke dashboard admin');
                return redirect()->route('dashboard-admin');
            } else {
                \Log::info('Mengalihkan ke home');
                return redirect()->route('home-user');
            }
        }

        return $next($request);
    }
}
