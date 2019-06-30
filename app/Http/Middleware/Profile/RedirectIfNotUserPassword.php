<?php

namespace App\Http\Middleware\Profile;

use Closure;

class RedirectIfNotUserPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd($request->route()->login->id);
        if ( !$request->user()->changepass( $request->route()->login->id ) ) {
            return redirect()->back();
        }
        return $next($request);
    }
}
