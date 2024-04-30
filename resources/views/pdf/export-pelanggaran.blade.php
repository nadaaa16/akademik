<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelangaran</title>
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
    <h2>Daftar Peminjaman</h2>
    <table>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Code Pelanggaran</th>
                <th scope="col">Rayon</th>
                <th scope="col">Rombel</th>
                {{-- <th scope="col">catatan</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggaran as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->codePelanggaran }}</td>
                    <td>{{ $item->rayon }}</td>
                    <td>{{ $item->rombel }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
