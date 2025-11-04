<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa; // 1. TAMBAHKAN IMPORT MODEL INI

class MahasiswaController extends Controller
{
    public function index()
    {
        // 2. HAPUS ARRAY YANG LAMA
        // $data_mahasiswa = [ ... ];

        // 3. GANTI DENGAN PERINTAH ELOQUENT INI
        // Ini akan mengambil SEMUA data dari tabel 'mahasiswas'
        $data_mahasiswa_eloquent = Mahasiswa::all();

        // 4. Kirim data yang dari database ke view
        return view('mahasiswa.index', [
            'judul' => 'Daftar Mahasiswa (dari DB)',
            'students' => $data_mahasiswa_eloquent // Kirim data baru
        ]);

        $data_mahasiswa_eloquent = Mahasiswa::all();
        return view('mahasiswa.index', [
            'judul' => 'Daftar Mahasiswa (dari DB)',
            'students' => $data_mahasiswa_eloquent
        ]);
    }

    public function create()
    {
        // Method ini hanya mengembalikan view form tambah data
        return view('mahasiswa.create', [
            'judul' => 'Tambah Mahasiswa Baru'
        ]);
    }

    // ----------------------------------------------
    // TAMBAHKAN METHOD BARU INI (UNTUK MENYIMPAN DATA)
    // ----------------------------------------------
    public function store(Request $request)
    {
        // 1. Buat instance Model Mahasiswa baru
        $mahasiswa = new Mahasiswa;

        // 2. Ambil data dari form dan isi ke properti model
        $mahasiswa->nama = $request->input('nama_mahasiswa');
        $mahasiswa->nim = $request->input('nim_mahasiswa');

        // 3. Simpan ke database
        $mahasiswa->save();

        // 4. Redirect (arahkan) pengguna kembali ke halaman daftar
        return redirect('/mahasiswa');
    }

    public function destroy(string $id)
{
    // 1. Cari data mahasiswa berdasarkan ID
    $mahasiswa = Mahasiswa::find($id);

    // 2. Hapus data dari database
    $mahasiswa->delete();

    // 3. Redirect (arahkan) pengguna kembali ke halaman daftar
    return redirect('/mahasiswa');
}

// ... (method destroy Anda) ...

    // ----------------------------------------------
    // TAMBAHKAN METHOD BARU INI (UNTUK MENAMPILKAN FORM EDIT)
    // ----------------------------------------------
    /**
     * Menampilkan form untuk mengedit data.
     */
    public function edit(string $id)
    {
        // 1. Cari data mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::find($id);

        // 2. Kirim data mahasiswa yang ditemukan ke view 'edit'
        return view('mahasiswa.edit', [
            'judul' => 'Edit Data Mahasiswa',
            'student' => $mahasiswa // Kirim data mahasiswa yang mau diedit
        ]);
    }

    // ----------------------------------------------
    // TAMBAHKAN METHOD BARU INI (UNTUK MENYIMPAN PERUBAHAN)
    // ----------------------------------------------
    /**
     * Memperbarui data di database.
     */
    public function update(Request $request, string $id)
    {
        // 1. Cari data mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::find($id);

        // 2. Ambil data dari form dan perbarui properti model
        $mahasiswa->nama = $request->input('nama_mahasiswa');
        $mahasiswa->nim = $request->input('nim_mahasiswa');

        // 3. Simpan perubahan ke database
        $mahasiswa->save();

        // 4. Redirect (arahkan) pengguna kembali ke halaman daftar
        return redirect('/mahasiswa');
    }
}
