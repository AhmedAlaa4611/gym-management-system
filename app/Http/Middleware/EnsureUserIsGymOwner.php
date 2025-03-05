<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsGymOwner
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->type === 'gym_owner') {
            return $next($request);
        }

        return response()->json(['message' => 'Access denied. Only gym owners are allowed.'], 403);
    }
}
