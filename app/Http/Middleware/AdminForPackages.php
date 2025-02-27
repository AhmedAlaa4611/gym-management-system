<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminForPackages
{
    public function handle(Request $request, Closure $next): Response
    {
        // التحقق مما إذا كان المستخدم مسجل الدخول ونوعه "admin"
        if (auth()->check() && auth()->user()->type === 'admin') {
            return $next($request);
        }

        // إعادة التوجيه إذا لم يكن المستخدم "admin"
        return redirect()->route('packages.index')->with('error', 'You do not have permission to create packages.');
    }
}
