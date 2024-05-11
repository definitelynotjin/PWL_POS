<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

/**
 * Cek_login middleware class for Laravel applications.
 *
 * This middleware checks if the user is authenticated and has the required role level
 * before allowing the request to proceed.
 */
class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     * @param string $roles Required role level
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        if (!Auth::check()) {
            return redirect('login')->with('error', 'Maaf anda tidak memiliki akses');
        }

        $user = Auth::user();

        if ($user->level_id == $roles) {
            return $next($request);
        }

        return redirect('login')->with('error', 'Maaf anda tidak memiliki akses');
    }
}

