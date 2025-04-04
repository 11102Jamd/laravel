<?php

use App\Http\Controllers\EntryController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Rutas públicas
Route::get('/', [GuestController::class, 'index'])->name('welcome');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/entries/create', [EntryController::class, 'create'])->name('entries.create');
    Route::post('/entries', [EntryController::class, 'store'])->name('entries.store');

    Route::get('/entries/{entry}', [GuestController::class, 'show']);
});
