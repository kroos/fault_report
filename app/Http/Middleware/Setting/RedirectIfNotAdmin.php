<?php

namespace App\Http\Middleware\Setting;

use Closure;
use Illuminate\Http\Request;

class RedirectIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // dd($request->route());
        if ( !$request->user()->onlyAdmin(1)) {
            return redirect()->back();
        }
        return $next($request);
    }
}
