<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlayerController;

// Halaman awal
Route::get('/', function () {
    return view('welcome');
});

// Dashboard, redirect ke /players
Route::get('/dashboard', function () {
    return redirect('/players');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk logout ke login lagi
Route::get('/logout', function () {
    auth()->logout();
    return redirect('/login');
})->name('logout');

// Group route untuk user yang sudah login (auth)
Route::middleware('auth')->group(function () {

    // Profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Player management
    Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
    Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');
    Route::post('/players', [PlayerController::class, 'store'])->name('players.store');
});

// Route auth (bawaan Laravel Breeze/Jetstream)
require __DIR__.'/auth.php';
