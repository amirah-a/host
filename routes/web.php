<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ApplicantForm;
use App\Http\Controllers\PublicStatsController;
use App\Http\Middleware\ProtectStats;
use App\Http\Controllers\StatsAuthController;


Route::get('/test', function () {
    return view('welcome');
})->name('home');

Route::get('/', ApplicantForm::class)->name('application');

// 1. The Login Page (GET)
Route::get('host/stats/login', [StatsAuthController::class, 'show'])
    ->name('stats.login'); // <--- THIS IS THE MISSING PIECE

// 2. The Login Submission (POST)
Route::post('host/stats/login', [StatsAuthController::class, 'login'])
    ->name('stats.login.post');

// 3. The Protected Stats Page
Route::get('host/stats', PublicStatsController::class)
    ->name('stats.index')
    ->middleware(ProtectStats::class);

Route::post('host/stats/logout', function () {
    session()->forget('stats_authorized');
    return redirect()->route('stats.login');
})->name('stats.logout');

Route::get('/_debug', function () {
    return [
        'fullUrl' => request()->fullUrl(),
        'root'    => request()->root(),
        'url()'   => url('/'),
        'scheme'  => request()->getScheme(),
        'host'    => request()->getHost(),
    ];
});
