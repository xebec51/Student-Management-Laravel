@extends('layouts.app')

@section('title', $judul)

@section('content')
    <h1>{{ $judul }}</h1>

    <form action="/mahasiswa" method="POST">
        @csrf
        <div>
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" value="{{ old('nim') }}" required>
            @error('nim')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
    <br>
    <a href="/mahasiswa">Kembali ke Daftar</a>
@endsection
