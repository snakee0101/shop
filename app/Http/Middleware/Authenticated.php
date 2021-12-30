<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticated
{
    public function handle(Request $request, Closure $next)
    {
        if(! auth()->check())
            return redirect()->route('account');

        return $next($request);
    }
}
