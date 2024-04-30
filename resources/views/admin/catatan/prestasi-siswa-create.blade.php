@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Tambah Prestasi Siswa')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Tambah Prestasi Siswa</h2>
</div>

<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <h2 style="margin-top: 20px;">Tambahkan Prestasi Kepada Siswa</h2>
    <form action="{{ route('prestasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="rayon" class="form-label mt-4">Rayon</label>
                <select class="form-control" id="rayon" name="rayon">
                    @foreach($rayon as $r)
                        <option value="{{ $r }}">{{ $r }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="nama" class="form-label mt-4">Nama Siswa</label>
                <select class="form-control" id="nama" name="nama">
                    @foreach($dataSiswa as $r)
                    <option value="{{ $r }}">{{ $r }}</option>
                @endforeach                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="namaEkskul" class="form-label mt-4">Nama Ekstrakurikuler</label>
                <input type="text" class="form-control" id="namaEkskul" name="namaEkskul">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="namaLomba" class="form-label mt-4">Nama Lomba</label>
                <input type="text" class="form-control" id="namaLomba" name="namaLomba">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="foto" class="form-label mt-4">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="deskripsi" class="form-label mt-4">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <div class="xs-pd-20-10 pd-ltr-20">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#rayon').on('change', function() {
            var rayon = $(this).val();
            $.ajax({
                url: '{{ route("prestasi.getStudentsByRayon") }}',
                type: 'GET',
                data: {
                    rayon: rayon
                },
                success: function(data) {
                    $('#nama').empty();
                    $.each(data, function(index, nama) {
                        $('#nama').append('<option value="' + nama + '">' + nama + '</option>');
                    });
                }
            });
        });
    });
</script>


<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection