@extends('back.layout.dashboard2-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Pelanggaran Siswa')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Pelanggaran Syahid</h2>
</div>

{{-- <div class="xs-pd-20-10 pd-ltr-20" style="margin-top: 20px;">
    <button class="btn btn-primary float-right" type="button" onclick="window.location.href='add-prestasi'">
        <i class="bi bi-plus-lg"></i>Tambah Prestasi Siswa
    </button>
</div> --}}

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="card-box pb-20">
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus">Nama</th>
                        <th>Code Pelangaran</th>
                        <th>Rayon</th>
                        <th>Tingkatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="txt">
                                    <div class="weight-600">Syahid</div>
                                </div>
                            </div>
                        </td>
                        <td>K 1.5 - Nongkrong</td>
                        <td>Cicurug 1</td>
                        <td>X</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection