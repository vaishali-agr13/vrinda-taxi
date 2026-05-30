<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login');
        }

        // role check
        $user = Auth::guard('admin')->user();

        // Role check
        if ($user->role != 'admin') {

            abort(403, 'Unauthorized Access');
        }

        return $next($request);
    }
}
