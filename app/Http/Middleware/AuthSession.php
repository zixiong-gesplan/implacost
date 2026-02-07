<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthSession
{
    public function handle(Request $request, Closure $next)
    {
        if (! session()->get('is_admin')) {
            return redirect('/');
        }

        return $next($request);
    }
}
