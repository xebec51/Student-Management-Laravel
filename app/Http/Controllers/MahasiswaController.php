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

    public function store(Request $request)
    {
        // 1. Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswas,nim' // 'unique:mahasiswas,nim' berarti harus unik di tabel 'mahasiswas' kolom 'nim'
        ]);

        // 2. Buat instance Model Mahasiswa baru
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $validatedData['nama'];
        $mahasiswa->nim = $validatedData['nim'];
        $mahasiswa->save();

        // 3. Redirect (arahkan) pengguna kembali ke halaman daftar
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan!'); // Menambah pesan sukses
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

    public function update(Request $request, string $id)
    {
        // 1. Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => [
                'required',
                'string',
                'max:20',
                Rule::unique('mahasiswas', 'nim')->ignore($id) // Unik, KECUALI untuk ID mahasiswa ini sendiri
            ]
        ]);

        // 2. Cari data mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $validatedData['nama'];
        $mahasiswa->nim = $validatedData['nim'];
        $mahasiswa->save();

        // 3. Redirect (arahkan) pengguna kembali ke halaman daftar
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil diperbarui!'); // Menambah pesan sukses
    }
}
