<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Daftar Prestasi</h2>
    <table>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis EksKul</th>
                <th scope="col">Nama Lomba</th>
                <th scope="col">Rayon</th>
                {{-- <th scope="col">catatan</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($prestasi as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->namaEkskul }}</td>
                    <td>{{ $item->namaLomba }}</td>
                    <td>{{ $item->rayon }}</td>
                    {{-- <td>{{ $item->status }}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
