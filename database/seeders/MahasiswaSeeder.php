<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa; // 1. IMPORT MODEL MAHASISWA
use Illuminate\Support\Facades\DB; // 2. IMPORT DB FACADE (OPSIONAL TAPI BAIK)

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 3. HAPUS DATA LAMA (AGAR TIDAK DUPLIKAT JIKA DIJALANKAN BERULANG)
        DB::table('mahasiswas')->truncate();

        // 4. MASUKKAN DATA BARU
        Mahasiswa::create([
            'nama' => 'Muh. Rinaldi Ruslan',
            'nim' => 'H0712XXXX'
        ]);

        Mahasiswa::create([
            'nama' => 'Budi Santoso',
            'nim' => 'H0712YYYY'
        ]);

        Mahasiswa::create([
            'nama' => 'Citra Lestari',
            'nim' => 'H0712ZZZZ'
        ]);
    }
}
