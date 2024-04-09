@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Tambah Rayon')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Tambah Rayon</h2>
</div>

{{-- @if (Session::get('errors'))
<p style="color: red">{{Session::get('errors')}}</p>
@endif --}}

<div class="mobile-menu-overlay"></div>
	<div class="main-container">
        <h2 style="margin-top: 20px;">Tambahkan Rayon</h2>
		<form action="{{ route('rayon.store') }}" method="POST">
			@csrf
			<div class="row">
				<div class="col">
					<label for="name" class="form-label mt-4">Rayon</label>
					<input type="text" name="rayon" id="rayon" class="form-control" placeholder="Rayon" aria-label="First name">
				</div>
				{{-- <div class="col">
					<label for="name" class="form-label mt-4">Deskripsi</label>
					<input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi" aria-label="Last name">
				</div> --}}
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
				{{-- <a href="/view-code" class="btn btn-danger me-md-2 fw-bold"><i class="bi bi-x"></i> Back</a> --}}
				<button href = "/index"class="btn btn-primary me-md-2" type="submit"><i class="bi bi-check"></i> Save</button>
			  </div>
		</form>
        </div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
