@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Tambah Guru')
@section('content')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <div class="mt-3 d-flex justify-content-center">
        <h2><i class="bi bi-trophy"></i>Tambah Guru</h2>
    </div>

    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <h2 style="margin-top: 20px;">Tambahkan Guru</h2>
        <form action="{{ route('data.guru') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="nama" class="form-label mt-4">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                </div>
                <div class="col">
                    <label for="nik" class="form-label mt-4">NIK</label>
                    <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="mapel" class="form-label mt-4">Guru Mapel</label>
                    <input type="text" name="mapel" id="mapel" class="form-control" placeholder="Guru Mapel">
                </div>
                <div class="col">
                    <label for="pembimbingRayon" class="form-label mt-4">Pembimbing Rayon</label>
                    <input type="text" name="pembimbingRayon" id="pembimbingRayon" class="form-control" placeholder="Pembimbing Rayon">
                </div>
                <div class="col">
                    <label for="jk" class="form-label mt-4">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-control" aria-label="Jenis Kelamin">
                        <option value="">Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Prempuan</option>
                    </select>
                </div>
            </div>
            <div class="xs-pd-20-10 pd-ltr-20">
                <button class="btn btn-primary float-right" type="submit">Tambah</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
