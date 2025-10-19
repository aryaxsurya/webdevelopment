<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\CheckAge;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

// form untuk input umur
Route::get('/age-check', [PageController::class, 'ageForm'])->name('age.form');
Route::post('/age-check', [PageController::class, 'ageSubmit'])->name('age.submit');
// route contact memakai middleware
Route::get('/contact', [PageController::class, 'contact'])
    ->middleware(\App\Http\Middleware\CheckAge::class)
    ->name('contact');

Route::post('/contact', [PageController::class, 'contactSubmit']);

Route::resource('contacts', ContactController::class);
