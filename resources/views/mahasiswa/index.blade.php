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
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student['nama'] }}</td>
                    <td>{{ $student['nim'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
