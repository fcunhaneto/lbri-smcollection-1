<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TitleUserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::controller(HomeController::class)->group(function () {
    Route::get('/{type?}', 'index')->where('type', 'series|filmes')->name('home');
});

Route::controller(TitleUserController::class)->group(function () {
    Route::get('/admin/{type?}', 'index')->middleware(['auth', 'verified'])->where('type', 'series|filmes')->name('admin');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
