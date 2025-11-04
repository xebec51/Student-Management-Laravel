<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController; // 1. Import Controller-nya di bagian atas

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// TAMBAHKAN DUA RUTE INI
// Rute untuk menampilkan form tambah data
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);

// Rute untuk memproses/menyimpan data baru dari form
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);

// Rute untuk menampilkan form edit (berisi data lama)
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);

// Rute untuk memproses/menyimpan perubahan data dari form edit
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
