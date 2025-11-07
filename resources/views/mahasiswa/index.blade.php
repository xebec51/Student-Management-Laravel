@extends('layouts.app') @section('title', $judul) @section('content')
    <h1>{{ $judul }}</h1>

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="/mahasiswa/create" class="btn btn-primary" style="margin-bottom: 15px;">Tambah Mahasiswa</a>

    <table>
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->nim }}</td>
                    <td style="display: flex; gap: 5px;">
                        <a href="/mahasiswa/{{ $student->id }}/edit" class="btn btn-warning">
                           Edit
                        </a>
                        <form action="/mahasiswa/{{ $student->id }}" method="POST" style="margin:0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection ```
