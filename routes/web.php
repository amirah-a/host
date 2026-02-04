<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ApplicantForm;

Route::get('/test', function () {
    return view('welcome');
})->name('home');

Route::get('/', ApplicantForm::class)->name('application');

Route::get('/_debug', function () {
    return [
        'fullUrl' => request()->fullUrl(),
        'root'    => request()->root(),
        'url()'   => url('/'),
        'scheme'  => request()->getScheme(),
        'host'    => request()->getHost(),
    ];
});
