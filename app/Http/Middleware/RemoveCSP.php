<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RemoveCSP
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Só remove CSP no ambiente local
        if (app()->environment('local')) {
            $response->headers->remove('Content-Security-Policy');
        }

        return $response;
    }
}
