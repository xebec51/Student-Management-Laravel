<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController; // 1. Import Controller-nya di bagian atas

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
