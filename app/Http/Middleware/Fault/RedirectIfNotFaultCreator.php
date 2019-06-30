<?php

namespace App\Http\Middleware\Fault;

use Closure;

class RedirectIfNotFaultCreator
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
        // dd($request->route()->fault->staff_id);
        if ( !$request->user()->onlyFaultOwner( $request->route()->fault->staff_id ) ) {
            return redirect()->back();
        }
        return $next($request);
    }
}
