@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Tambah Guru')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Tambah Guru</h2>
</div>

<div class="mobile-menu-overlay"></div>

        <!--isi form-->
		<div class="main-container">
            <h2 style="margin-top: 20px;">Tambahkan Guru</h2>
            <div class="row">
                <div class="col">
                    <label for="nis" class="form-label mt-4">NIK</label>
                  <input type="text" name="nis" id="nis" class="form-control" placeholder="NIS" aria-label="First name">
                </div>
                <div class="col">
                    <label for="nama" class="form-label mt-4">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" aria-label="First name">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="Guru Mapel" class="form-label mt-4">Guru Mapel</label>
                  <input type="text" name="Guru Mapel" id="Guru Mapel" class="form-control" placeholder="Guru Mapel" aria-label="First name">
                </div>
                <div class="col">
                    <label for="Pembimning Rayon" class="form-label mt-4">Pembimning Rayon</label>
                  <input type="text" name="Pembimning Rayon" id="pembimningRayon" class="form-control" placeholder="Pembimning Rayon" aria-label="First name">
                </div>
                <div class="col">
                    <label for="codePelangaran" class="form-label mt-4">Jenis Kelamin</label>
                        <select name="codePelangaran" id="codePelangaran" class="form-control" aria-label="Code Pelangaran">
                            <option value="">Jenis Kelamin</option>
                            <option value="option1">Laki-laki</option>
                            <option value="option2">Prempuan</option>
                        </select>
                    </div>
            </div>
            <div class="xs-pd-20-10 pd-ltr-20">
                <button class="btn btn-primary float-right" type="button">Simpan</button>
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
