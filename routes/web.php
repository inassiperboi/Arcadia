<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\KoleksiBukuController;
use App\Http\Controllers\PeminjamanController;
// use App\Http\Controllers\RiwayatPeminjamanController;
// use App\Http\Controllers\ProfilController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\prosesController;
use App\Http\Controllers\HomeController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/daftar', [PeminjamController::class, 'showRegistrationForm'])->name('daftar');
Route::post('/daftar', [PeminjamController::class, 'register']);

Route::post('/prosespeminjaman', [prosesController::class, 'prosesPeminjaman']);
Route::post('/invoice', [prosesController::class, 'invoice']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('menu', function () {
    return view('menu');
});
Route::get('koleksi', function () {
    return view('koleksi_buku');
});
Route::get('form', function () {
    return view('formulir_peminjaman');
});
Route::get('prosespeminjaman', function () {
    return view('prosespeminjaman');
});


Route::post('/prosespeminjaman', [prosesController::class, 'prosesPeminjaman'])->name('prosespeminjaman');
Route::get('/prosespeminjaman/{id_buku}', [prosesController::class, 'prosesPeminjaman'])->name('prosespeminjaman');


Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/form', [FormulirController::class, 'index'])->name('formulir_pendaftaran');
Route::post('/form', [FormulirController::class, 'index'])->name('formulir_pendaftaran');

Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('/koleksi_buku', [KoleksiBukuController::class, 'index'])->name('koleksi_buku');
Route::post('/koleksi_buku', [KoleksiBukuController::class, 'index'])->name('koleksi_buku');

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::get('/riwayat-peminjaman', [RiwayatPeminjamanController::class, 'index'])->name('riwayat_peminjaman');
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

Route::post('/peminjaman', 'PeminjamanController@store')->name('peminjaman.store');

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'formLoginnd'])->name('login');
// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
// Route::get('/daftar', [App\Http\Controllers\Auth\daftarcontroller::class, 'daftar'])->name('daftar');
