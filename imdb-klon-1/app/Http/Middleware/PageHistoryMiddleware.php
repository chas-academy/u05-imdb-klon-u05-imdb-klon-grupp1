<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PageHistoryMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $history = session('page_history', []);
        $history[] = $request->url();
        session(['page_history' => $history]);

        return $next($request);
    }
}
