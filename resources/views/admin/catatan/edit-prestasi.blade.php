@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Tambah Prestasi Siswa')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Edit Prestasi Siswa</h2>
</div>

<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <h2 style="margin-top: 20px;">Edit Prestasi Siswa</h2>
    <form action="{{ route('prestasi.update',['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col">
            <label for="nama" class="form-label mt-4">Nama</label>
            <select name="nama" id="nama" class="form-control" aria-label="Code Pelangaran">
                {{-- <option value="">Pilih Code Pelangaran</option> --}}
                @foreach ($dataSiswa as $value)
                    <option value="{{ $value->nama }}">{{ $value->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="nama" class="form-label mt-4">Nama Ekskul</label>
            <input type="text" name="namaEkskul" id="namaEkskul" class="form-control" value="{{ $data->namaEkskul}}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="namaLomba" class="form-label mt-4">Nama Lomba</label>
            <input type="text" name="namaLomba" id="namaLomba" class="form-control" value="{{ $data->namaLomba}}" >
        </div>
        <div class="col">
            <label for="tingkat" class="form-label mt-4">Tingkat</label>
            <select name="tingkat" id="tingkat" class="form-control">
                <option value="">Tingkat</option>
                <option value="X" @if ($data->tingkat == "X") selected @endif>X</option>
                <option value="XI" @if ($data->tingkat == "XI") selected @endif>XI</option>
                <option value="XII" @if ($data->tingkat == "XII") selected @endif>XII</option>
            </select>
        </div>
    </div>
	<div class="mb-3">
		<label for="formFileMultiple" class="form-label">Tambahkan Foto</label>
		<input class="form-control" name="foto" type="file" id="formFileMultiple" multiple="multipart/form-data">
	</div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Catatan</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $data->deskripsi}}</textarea>
    </div>
    <div class="xs-pd-20-10 pd-ltr-20">
        <button class="btn btn-primary float-right" type="submit">Simpan</button>
    </div>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection