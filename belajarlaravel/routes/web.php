<?php

use Illuminate\Support\Facades\Route;
// PASTIKAN BARIS INI ADA DI ATAS (Baris 4 di screenshot kamu)
use App\Http\Controllers\artikelcontroller; 

// 1. Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// 2. BAGIAN INI YANG PENTING (MENGGANTIKAN ROUTE ARTIKEL LAMA)
// Baris inilah yang membuat "use" di atas tadi jadi tidak abu-abu lagi
Route::resource('artikel', artikelcontroller::class);

// 3. Halaman Kontak
Route::get('/kontak', function () {
    return view('contact');
});

// 4. Halaman Profil
Route::get('/profil', function () {
    return view('profile'); 
});