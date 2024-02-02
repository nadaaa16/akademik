@extends('back.layout.dashboard-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Pelanggaran Siswa')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Detail Syahid</h2>
</div>

{{-- <div class="xs-pd-20-10 pd-ltr-20" style="margin-top: 20px;">
    <button class="btn btn-primary float-right" type="button" onclick="window.location.href='add-prestasi'">
        <i class="bi bi-plus-lg"></i>Tambah Prestasi Siswa
    </button>
</div> --}}

<div class="mt-3 d-flex justify-content-center">
    <div class="card" style="width: 30rem;">
      <div class="card-body">
      <h3 class="text-center">K 1.1 Menongkrong</h3>
        <div class="d-flex justify-content-center">
            <img src="{{ asset('assets/images/juara3.png') }}" class="img-fluid" alt="Gambar" style="max-width: 200px; max-height: 200px;">
          </div>
          
        <table class="table table-borderless">
          <tbody>
            <tr>
              <td>Nama:</td>
              <td>Rayon:</td>
            </tr>
          </tbody>
        </table>
        <div class="form-group">
          <textarea class="form-control" rows="3" readonly>Menongkrong tidak jelas</textarea>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
          <a href="/index" class="btn btn-danger me-md-2 fw-bold"><i class="bi bi-x"></i> Back</a>
        </div>
      </div>
    </div>
  </div>
  

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection