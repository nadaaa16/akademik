@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Data Siswa')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Absensi Siswa Yang Tidak Hadir</h2>
</div>

<div class="xs-pd-20-10 pd-ltr-20" style="margin-top: 20px;">
    <button class="btn btn-primary float-right" type="button" onclick="window.location.href='add-absensi'">
        <i class="bi bi-plus-lg"></i>Tambah Absensi Siswa
    </button>
</div>

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="card-box pb-20">
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus">Nama</th>
                        <th>NIS</th>
                        <th>Rayon</th>
                        <th>Tingkat</th>
                        <th>Keterangan</th>
                        <th class="datatable-nosort">Actions</th>
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
                        <td>12108633</td>
                        <td>Cicurug 1</td>
                        <td>XII</td>
                        <td>Alpha</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="#" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection