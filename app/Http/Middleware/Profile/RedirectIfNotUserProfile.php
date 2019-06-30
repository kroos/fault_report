<?php

namespace App\Http\Middleware\Profile;

use Closure;

class RedirectIfNotUserProfile
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
        if ( !$request->user()->onlyProfileOwner( $request->route()->staff->id ) ) {
            return redirect()->back();
        }
        return $next($request);
    }
}
