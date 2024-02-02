@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Tambah Prestasi Siswa')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Tambah Prestasi Siswa</h2>
</div>

<div class="mobile-menu-overlay"></div>

        <!--isi form-->
		<div class="main-container">
            <h2 style="margin-top: 20px;">Tambahkan Prestasi yang Diraih Siswa</h2>
            <div class="row">
                <div class="col">
                    <label for="nama" class="form-label mt-4">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" aria-label="First name">
                </div>
               <div class="col">
    			<label for="codePelangaran" class="form-label mt-4">Jenis Ekskul</label>
					<select name="codePelangaran" id="codePelangaran" class="form-control" aria-label="Code Pelangaran">
						<option value="">Pilih Ekskul</option>
						<option value="option1">Option 1</option>
						<option value="option2">Option 2</option>
						<option value="option3">Option 3</option>
						<!-- Tambahkan opsi lain sesuai kebutuhan -->
					</select>
				</div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="namaLomba" class="form-label mt-4">Nama Lomba</label>
                  <input type="text" name="namaLomba" id="namaLomba" class="form-control" placeholder="Nama Lomba" aria-label="First name">
                </div>
                <div class="col">
                    <label for="codePelangaran" class="form-label mt-4">Tingkat</label>
                        <select name="codePelangaran" id="codePelangaran" class="form-control" aria-label="Code Pelangaran">
                            <option value="">Tingkat</option>
                            <option value="option1">X</option>
                            <option value="option2">XI</option>
                            <option value="option3">XII</option>
                            <!-- Tambahkan opsi lain sesuai kebutuhan -->
                        </select>
                    </div>
            </div>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Deskripsi Kegiatan</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
            {{-- <div class="xs-pd-20-10 pd-ltr-20">
                <input class="form-control" type="text" value="" aria-label="Deskripsi">
            </div> --}}
            <div class="xs-pd-20-10 pd-ltr-20">
                <button class="btn btn-primary float-right" type="button">Tambah</button>
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection