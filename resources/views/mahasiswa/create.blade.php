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
    </style>
</head>
<body>

    <h1>{{ $judul }}</h1>

    <form action="/mahasiswa" method="POST">
        @csrf

        <div>
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" id="nama" name="nama_mahasiswa" required>
        </div>

        <div>
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim_mahasiswa" required>
        </div>

        <div>
            <button type="submit">Simpan Data</button>
        </div>
    </form>

    <br>
    <a href="/mahasiswa">Kembali ke Daftar</a>

</body>
</html>
