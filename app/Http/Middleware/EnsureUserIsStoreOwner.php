<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsStoreOwner
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->type === 'store_owner') {
            return $next($request);
        }

        return response()->json(['message' => 'Access denied. Only store owners are allowed.'], 403);
    }
}
