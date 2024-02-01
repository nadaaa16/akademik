@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Tambah Code Pelangaran Siswa')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Tambah Code Pelangaran Siswa</h2>
</div>

<div class="mobile-menu-overlay"></div>
	<div class="main-container">
        <h2 style="margin-top: 20px;">Tambahkan Code Yang Sesuai Dengan BKP</h2>
			<div class="row">
				<div class="col">
					<label for="kode" class="form-label mt-4">Kode</label>
					<input type="text" name="kode" id="kode" class="form-control" placeholder="Kode" aria-label="First name">
				</div>
				<div class="col">
					<label for="deskripsi" class="form-label mt-4">Deskripsi</label>
					<input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi" aria-label="Last name">
				</div>
			</div>
            <div class="xs-pd-20-10 pd-ltr-20">
                <button class="btn btn-primary float-right" type="button">Tambah</button>
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection