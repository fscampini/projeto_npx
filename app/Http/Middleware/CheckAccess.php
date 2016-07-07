<?php

namespace ProjectNpx\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class CheckAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {

        //return dd($request->route()->getAction()['access']);

        return $next($request);
    }
}
