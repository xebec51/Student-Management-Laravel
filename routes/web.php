<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController; // 1. Import Controller-nya di bagian atas

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// TAMBAHKAN DUA RUTE INI
// Rute untuk menampilkan form tambah data
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);

// Rute untuk memproses/menyimpan data baru dari form
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
