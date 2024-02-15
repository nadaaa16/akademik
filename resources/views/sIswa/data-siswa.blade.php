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
            <table id="example" class="table table-striped" style="width:100%">
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
                            <a href="{{ route('edit-data',  $siswa->id) }}" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{$siswa->id}}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('user-delete',  $siswa->id) }}" class="btn btn-danger">Del</a>
                        </td>
                    </tr>
                    <div class="modal fade" id="exampleModal{{$siswa->id}}" tabindex="-1"
                        aria-labelledby="exampleModalLabel{{$siswa->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h1>Siswa</h1>
                                    @if ($errors->any())
                                    <div class="alert alert-danger w-50">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <form  action="{{ route('update-data',$siswa->id) }}" method="post">

                                        @csrf
                                        @method('put')
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" name="nama" value="{{ $siswa->nama }}">

                                        <label for="nis">NIS</label>
                                        <input type="number" id="nis" name="nis" value="{{ $siswa->nis }}"><br><br>

                                        <label for="tingkat">Tingkat</label>
                                        <input type="text" id="tingkat" name="tingkat"
                                            value="{{ $siswa->tingkat }}"><br><br>

                                        <label for="rayon">Rayon</label>
                                        <input type="text" id="rayon" name="rayon" value="{{ $siswa->rayon }}"><br><br>

                                        <div class="form-floating mt-3 mb-3">
                                            <select class="form-control" name="jk">
                                                <option value="">pilih</option>
                                                <option value="laki-laki"
                                                    {{ $siswa->jk == 'laki-laki' ? 'selected' : '' }}>laki-laki</option>
                                                <option value="perempuan"
                                                    {{ $siswa->jk == 'perempuan' ? 'selected' : '' }}>perempuan</option>
                                            </select>
                                            <label for="jk">Jenis Kelamin</label>
                                        </div>

                                        <input type="submit" value="Submit">
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Button trigger modal -->
                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}

                    <!-- Modal -->



                    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
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
