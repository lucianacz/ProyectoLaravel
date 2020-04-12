<?php

namespace App\Http\Middleware;

use Closure;

class Redirect
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
        return $next($request);
    }



App::before( function( $request )
{
    if( ! Request::secure() )
    {
        return Redirect::secure( Request::path() );
    }
});
}
