@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Tambah Absensi')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Tambah Absensi</h2>
</div>

<div class="mobile-menu-overlay"></div>
		<div class="main-container">
            <h2 style="margin-top: 20px;">Tambah Absensi Siswa yang Tidak Hadir</h2>
            <form action="{{ route('absensi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col">
                    <label for="nama" class="form-label mt-4">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                </div>
                <div class="col">
                    <label for="rayon" class="form-label mt-4">Rayon</label>
                  <input type="text" name="rayon" id="rayon" class="form-control" placeholder="Rayon">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="rombel" class="form-label mt-4">Rombel</label>
                  <input type="text" name="rombel" id="rombel" class="form-control" placeholder="Rombel">
                </div>
                <div class="col">
                    <label for="keterangan" class="form-label mt-4">Keterangan</label>
                    <br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="keterangan" id="sakit" value="sakit">
                        <label class="form-check-label" for="sakit">Sakit</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="keterangan" id="izin" value="izin">
                        <label class="form-check-label" for="izin">Izin</label>
                      </div>
                    </div>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Bukti</label>
                <input class="form-control" name= "img" type="file" id="formFileMultiple" multiple>
              </div>
            <div class="xs-pd-20-10 pd-ltr-20">
                <button class="btn btn-primary float-right" type="submit">Tambah</button>
            </div>
        </div>
    </form>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
