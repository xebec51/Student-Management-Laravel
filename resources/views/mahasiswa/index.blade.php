<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>

    <style>
        body { font-family: sans-serif; margin: 2em; }
        table { border-collapse: collapse; width: 400px; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>{{ $judul }}</h1>

    <table>
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Aksi</th> </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->nim }}</td>

                    <td style="display: flex; gap: 5px;">
                        <a href="/mahasiswa/{{ $student->id }}/edit"
                           style="background-color: #ffc107; color: black; padding: 5px 10px; text-decoration: none; border-radius: 4px;">
                           Edit
                        </a>

                        <form action="/mahasiswa/{{ $student->id }}" method="POST" style="margin:0;">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    style="background-color: #dc3545; color: white; border: none; padding: 5px 10px; cursor: pointer; border-radius: 4px;"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
