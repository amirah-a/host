<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Formkit Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains configuration options for the M21 Formkit package.
    |
    */

    // Package configuration options
    'enabled' => true,

    // Force HTTPS for reverse proxy environments
    'force_https' => true,

    // Handle Livewire routes for reverse proxy environments
    'livewire_routes' => true,

    /*
    |--------------------------------------------------------------------------
    | Trusted Proxies
    |--------------------------------------------------------------------------
    |
    | Configure trusted proxies for reverse proxy environments.
    | Specify IP addresses or CIDR ranges, use '*' to trust all proxies,
    | or set to [] to trust none.
    |
    */
    'trusted_proxies' => env('FORMKIT_TRUSTED_PROXIES', '172.16.121.9'),
];

