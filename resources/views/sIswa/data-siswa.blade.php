<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- //cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- //datatable --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>



    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
    <table id="example" class="table table-striped" style="width:100%" >
        <div class="">
            <a href="/tambah-siswa" class="btn btn-primary"><i class="bi bi-arrow-counterclockwise"></i></a>
        </div>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Nis</th>
                <th>Tingkat</th>
                <th>Rayon</th>
                <th>Jk</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswaList as $siswa)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->nis}}</td>
                <td>{{$siswa->tingkat}}</td>
                <td>{{$siswa->rayon}}</td>
                <td>{{$siswa->jk}}</td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Del</a>
                </td>
            </tr>
        @endforeach
            <script>
                $(document).ready(function () {
                    $('#example').DataTable();
                });

            </script>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                crossorigin="anonymous"></script>
            </div>
            </div>
</body>

</html>
