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
            <label for="nama" class="form-label mt-4">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" aria-label="First name">
        </div>
        <div class="col">
            <label for="nama" class="form-label mt-4">Nama Ekskul</label>
            <input type="text" name="namaEkskul" id="namaEkskul" class="form-control" placeholder="Nama Ekskul" aria-label="First name">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="namaLomba" class="form-label mt-4">Nama Lomba</label>
            <input type="text" name="namaLomba" id="namaLomba" class="form-control" placeholder="Nama Lomba" aria-label="First name">
        </div>
        <div class="col">
            <label for="tingkat" class="form-label mt-4">Tingkat</label>
            <select name="tingkat" id="tingkat" class="form-control" aria-label="Code Pelangaran">
                <option value="">Tingkat</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>
        </div>
    </div>
	<div class="mb-3">
		<label for="formFileMultiple" class="form-label">Tambahkan Foto</label>
		<input class="form-control" name= "foto" type="file" id="formFileMultiple" multiple>
	</div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Catatan</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
    </div>
    <div class="xs-pd-20-10 pd-ltr-20">
        <button class="btn btn-primary float-right" type="submit">Tambah</button>
    </div>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection