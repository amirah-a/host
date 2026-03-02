<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProtectStats
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, $next) {
        if (!session('stats_authorized')) {
            return redirect()->route('stats.login');
        }

        // Check last activity timestamp
        $lastActivity = session('stats_last_activity');
        $timeout = 15 * 60; // 15 minutes in seconds

        if ($lastActivity && (time() - $lastActivity > $timeout)) {
            session()->forget(['stats_authorized', 'stats_last_activity']);
            return redirect()->route('stats.login')->withErrors(['passkey' => 'Session expired due to inactivity.']);
        }

        session(['stats_last_activity' => time()]);

        return $next($request);
    }

}
