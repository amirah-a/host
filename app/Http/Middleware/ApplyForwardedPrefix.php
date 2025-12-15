<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApplyForwardedPrefix
{
    public function handle(Request $request, Closure $next)
    {
        $prefix = "/hosp";

        if ($prefix) {
            // Normalize prefix to "/hosp" (no trailing slash)
            $prefix = '/' . ltrim($prefix, '/');
            $prefix = rtrim($prefix, '/');

            // If Apache stripped /hosp before proxying, Laravel sees "/livewire/..."
            // Re-inject the prefix into REQUEST_URI so URL generation/signing aligns with the browser URL.
            $uri = $request->server->get('REQUEST_URI'); // includes query string
            if (is_string($uri) && $uri !== '' && !str_starts_with($uri, $prefix . '/')) {
                $request->server->set('REQUEST_URI', $prefix . $uri);
            }

            // Help Symfony compute the base URL.
            $scriptName = $request->server->get('SCRIPT_NAME') ?: '';
            if ($scriptName !== '' && !str_starts_with($scriptName, $prefix . '/')) {
                $request->server->set('SCRIPT_NAME', $prefix . $scriptName);
            }
        }

        return $next($request);
    }
}
