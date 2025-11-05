<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
    <style>
        body { font-family: sans-serif; margin: 2em; }
        div { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"] { width: 300px; padding: 8px; border: 1px solid #ddd; }
        button { padding: 10px 15px; background-color: #007bff; color: white; border: none; cursor: pointer; }
        .error { color: red; font-size: 0.9em; }
    </style>
</head>
<body>
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
            <button type="submit">Simpan Perubahan</button>
        </div>
    </form>
    <br>
    <a href="/mahasiswa">Kembali ke Daftar</a>
</body>
</html>
