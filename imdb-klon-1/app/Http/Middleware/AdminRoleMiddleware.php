<?php

namespace App\Http\Middleware;

use Closure;

class AdminRoleMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->hasRole('admin')) {
            return $next($request);
        }

        abort(403, 'Unauthorized action.');
    }
}
