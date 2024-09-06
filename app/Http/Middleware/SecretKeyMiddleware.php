<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecretKeyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $secretKey = env('SECRET_KEY');

        if ($request->header('X-Secret-Key') === $secretKey) {
            return $next($request);
        }

        return response()->json(['error' => 'Unauthorized.'], 401);
    }
}
