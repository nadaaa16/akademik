@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Tambah Code Pelangaran Siswa')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Tambah Code Pelangaran Siswa</h2>
</div>

<div class="mobile-menu-overlay"></div>
<!-- Isi form -->
<div class="main-container">
    <h2 style="margin-top: 20px;">Tambahkan Catatan Kepada Siswa</h2>
    <div class="row">
        <div class="col">
            <label for="nama" class="form-label mt-4">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" aria-label="First name">
        </div>
        <div class="col">
            <label for="codePelangaran" class="form-label mt-4">Code Pelangaran</label>
            <select name="codePelangaran" id="codePelangaran" class="form-control" aria-label="Code Pelangaran">
                <option value="">Pilih Code Pelangaran</option>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
                <!-- Tambahkan opsi lain sesuai kebutuhan -->
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="Rayon" class="form-label mt-4">Rayon</label>
            <input type="text" name="Rayon" id="Rayon" class="form-control" placeholder="Rayon" aria-label="First name">
        </div>
        <div class="col">
            <label for="tingkat" class="form-label mt-4">Kelas / Rombel</label>
            <input type="text" name="tingkat" id="tingkat" class="form-control" placeholder="Tingkat" aria-label="Last name">
        </div>
    </div>
	<div class="mb-3">
		<label for="formFileMultiple" class="form-label">Tambahkan Foto</label>
		<input class="form-control" type="file" id="formFileMultiple" multiple>
	  </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="xs-pd-20-10 pd-ltr-20">
        <button class="btn btn-primary float-right" type="button">Tambah</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection