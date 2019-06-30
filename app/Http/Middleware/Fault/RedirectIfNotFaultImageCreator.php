<?php

namespace App\Http\Middleware\Fault;

use Closure;

class RedirectIfNotFaultImageCreator
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
        // dd($request->route()->faultImage->id);
        if ( !$request->user()->onlyFaultImageOwner( $request->route()->faultImage->id ) ) {
            return redirect()->back();
        }
        return $next($request);
    }
}
