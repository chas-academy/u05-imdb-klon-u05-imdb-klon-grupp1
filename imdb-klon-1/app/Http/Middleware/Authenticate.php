<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $this->authenticate($request, $guards);

        // If authentication is successful, check for the "admin" role
        $this->checkRole($request);

        return $next($request);
    }

    /**
     * Check for the "admin" role.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function checkRole(Request $request)
    {
        // Add your logic to check for the "admin" role
        // Example: If the user doesn't have the "admin" role, redirect them to the login page
        if (!auth()->check() || !auth()->user()->hasRole('admin')) {
            abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
}
