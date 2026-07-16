<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ApplicantForm;
use App\Http\Controllers\PublicStatsController;
use App\Http\Middleware\ProtectStats;
use App\Http\Controllers\StatsAuthController;
use App\Http\Controllers\IndexController;
use App\Filament\Resources\Applicants\Pages\TestViewApplicant;


Route::get('/test', function () {
    return view('welcome');
})->name('home');

Route::get('/thank-you', [IndexController::class, 'confirmation'])->name('confirmation');

Route::get('/', ApplicantForm::class)->name('application');
Route::get('/email', [PublicStatsController::class, 'email'])->name('email');

// 1. The Login Page (GET)
Route::get('/stats/login', [StatsAuthController::class, 'show'])
    ->name('stats.login'); // <--- THIS IS THE MISSING PIECE

// 2. The Login Submission (POST)
Route::post('/stats/login', [StatsAuthController::class, 'login'])
    ->name('stats.login.post');

// 3. The Protected Stats Page
Route::get('/stats', PublicStatsController::class)
    ->name('stats.index')
    ->middleware(ProtectStats::class);

Route::get('/closed', function () {
    return view('503');
})->name('closed');

Route::post('/stats/logout', function () {
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
