<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectPartenaireToLogin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! Auth::guard('partenaire')->check()) {
            return redirect()->route('partenaire.login');
        }

        return $next($request);
    }
}
