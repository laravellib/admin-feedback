<?php

namespace codicastudio\NovaKustomer\Http\Middleware;

use codicastudio\NovaKustomer\NovaKustomer;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(NovaKustomer::class)->authorize($request) ? $next($request) : abort(403);
    }
}
