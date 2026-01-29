<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTimeAccess
{
    public function handle(Request $request, Closure $next): Response
    {
        $now = Carbon::now();
        $start = Carbon::parse('07:00:00');
        $end   = Carbon::parse('18:00:00');

        if ($now->between($start, $end)) {
            return $next($request);
        }

        return response()->json([
            'message' => 'Access denied',
            'time' => $now->format('H:i:s'),
        ], 403);
    }
}
