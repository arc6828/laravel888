<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $your_role = $request->user()->role;
        if (!in_array($your_role, $roles, True)) {
            // Redirect if not allowed ...
            return redirect('/');
        }

        return $next($request);
    }
}