<?php

namespace InApps\IAModules;

use Closure;

class BaseMiddleware
{
    public function handle($request, Closure $next)
    {
        // Perform action
        return $next($request);
    }
}
