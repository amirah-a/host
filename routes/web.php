<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ApplicantForm;

Route::get('/test', function () {
    return view('welcome');
})->name('home');

Route::get('/', ApplicantForm::class)->name('application');
