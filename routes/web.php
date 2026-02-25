<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('frontend.home'))->name('frontend.home');
Route::get('/contact', fn () => view('frontend.contact'))->name('frontend.contact');

Route::view('dashboard', 'backend.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('backend.dashboard');

require __DIR__.'/settings.php';
