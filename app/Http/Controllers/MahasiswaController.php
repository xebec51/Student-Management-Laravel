<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // 1. Kita buat data array dummy (contoh)
        $data_mahasiswa = [
            [
                'nama' => 'Muh. Rinaldi Ruslan',
                'nim' => 'H0712XXXX'
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => 'H0712YYYY'
            ],
            [
                'nama' => 'Citra Lestari',
                'nim' => 'H0712ZZZZ'
            ]
        ];

        // 2. Kita kirim data itu ke view bernama 'mahasiswa.index'
        // 'students' akan menjadi nama variabel di file Blade nanti
        return view('mahasiswa.index', [
            'judul' => 'Daftar Mahasiswa',
            'students' => $data_mahasiswa
        ]);
    }
}
