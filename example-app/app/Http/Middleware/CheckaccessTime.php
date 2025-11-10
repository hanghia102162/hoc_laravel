<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckaccessTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $now = Carbon::now();
        $start = Carbon::createFromTime(9, 0); // 9 AM
        $end = Carbon::createFromTime(13, 0); // 5 PM
        if ($now->lessThan($start) || $now->greaterThan($end)) {
            return response("ngoia gio lam viec thu lai vao tu 7h den 17h", 403);
        }
        return $next($request);
    }
}
