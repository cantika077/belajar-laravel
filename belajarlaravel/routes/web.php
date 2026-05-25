<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

// --- HOME (bebas akses) ---
Route::get('/', [ArtikelController::class, 'index'])->name('home');
Route::get('/home', [ArtikelController::class, 'index']);
Route::get('/dashboard', [ArtikelController::class, 'index'])->name('dashboard');

// --- ARTIKEL ---
Route::get('/artikel', [ArtikelController::class, 'artikel'])->name('artikel');

Route::middleware('auth')->group(function () {
    Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
    Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::get('/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
    Route::put('/artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
    Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
});

Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');

// --- PROFIL ---
Route::get('/profil', function () { return view('profile'); })->name('profil.indonesia');
Route::get('/profile', function () { return view('profile'); });

// --- KONTAK ---
Route::get('/kontak', function () { return view('contact'); })->name('kontak');
Route::get('/contact', function () { return view('contact'); });

require __DIR__.'/auth.php';