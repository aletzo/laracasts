<?php

namespace App\Http\Middleware;

class FlushViewCache
{

    public function handle($request, $next)
    {
        if (app()->isLocal()) {
            \Cache::flush();
        }

        return $next($request);
    }

}
