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
            $end = Carbon::createFromTime(17, 0); // 23 PM
            if ($now->lessThan($start) || $now->greaterThan($end)) {
                return response("ngoài gio lam việc thu lai vao tu 9h den 23h", 403);
            }
            return $next($request);
    }
}
