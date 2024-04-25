@extends('back.layout.dashboard-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Pelanggaran Siswa')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>User</h2>
</div>

{{-- <div class="xs-pd-20-10 pd-ltr-20" style="margin-top: 20px;">
    <button class="btn btn-primary float-right" type="button" onclick="window.location.href='add-prestasi'">
        <i class="bi bi-plus-lg"></i>Tambah Prestasi Siswa
    </button>
</div> --}}

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="card-box pb-20">
            <a href="{{route('tambah-user')}}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah
                Pengguna</a>
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus">No</th>
                        <th>Nama</th>
                        <th>Role</th>
                        <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($users as $user)
                    <tr>
                        <th>{{$no++}}</th>
                        <td>{{$user->nama}}</td>
                        <td>{{$user->role}}</td>
                        <td>
                            <a href="{{ route('edit', ['id' => $user->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <a href="{{ route('hapus', $user->id) }}" class="btn btn-danger"><i
                                    class="fas fa-trash-alt"></i> Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection