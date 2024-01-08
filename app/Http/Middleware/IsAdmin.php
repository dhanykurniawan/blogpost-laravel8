<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // cek udah login apa belum ATAU yang login bukan admin (is_admin=false)
        if (auth()->guest() || !auth()->user()->is_admin) { //if (!auth()->check() || !auth()->user->is_admin) {
            abort(403); // kasih pesan 403 yang artinya forbidden
        }

        return $next($request);
    }
}
