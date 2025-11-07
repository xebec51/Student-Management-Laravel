@extends('layouts.app')

@section('title', $judul)

@section('content')
    <h1>{{ $judul }}</h1>

    <form action="/mahasiswa/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" id="nama" name="nama"
                   value="{{ old('nama', $student->nama) }}" required>
            @error('nama')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim"
                   value="{{ old('nim', $student->nim) }}" required>
            @error('nim')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
    <br>
    <a href="/mahasiswa">Kembali ke Daftar</a>
@endsection
