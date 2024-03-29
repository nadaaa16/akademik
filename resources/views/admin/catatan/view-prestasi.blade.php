@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Detail')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Detail</h2>
</div>

<div class="mt-3 d-flex justify-content-center">
    <div class="card" style="width: 30rem;">
      <div class="card-body">
      <h3 class="text-center">Nama Lomba</h3>
      <div class="app-card-body p-3 p-lg-4">
        <div class="row gx-5 gy-3 d-flex justify-content-center">
            <img src="{{asset('fotoPrestasi/'.$pem->foto)}}" style="max-width: 500px; height: auto;" alt="">
        </div>
        </div>
          
        <table class="table table-borderless">
          {{-- <tbody>
            <tr>
              <td>Nama :</td>
              <td>Tingkat :</td>
              <td>Nama Ekskul :</td>
              <td>Deskripsi :</td>
            </tr>
          </tbody> --}}
        </table>
        <div class="form-group">
          <textarea class="form-control" rows="3" readonly>AAAAAAAAAAAAA</textarea>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
          <a href="/pelanggaran-siswa" class="btn btn-danger me-md-2 fw-bold"><i class="bi bi-x"></i> Back</a>
        </div>
      </div>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection