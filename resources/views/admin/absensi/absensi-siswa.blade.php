@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Absensi Siswa')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Absensi Siswa Yang Tidak Hadir</h2>
</div>

<div class="xs-pd-20-10 pd-ltr-20" style="margin-top: 20px;">
    <button class="btn btn-primary float-right" type="button" onclick="window.location.href='absensi-siswa-create'">
        <i class="bi bi-plus-lg">Tambah Absensi Siswa</i>
    </button>
</div>

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="card-box pb-20">
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus">Nama</th>
                        {{-- <th>NIS</th> --}}
                        <th>Rayon</th>
                        <th>Rombel</th>
                        <th>Keterangan</th>
                        {{-- <th>Bukti</th> --}}
                        <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absensi as $value)
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="txt">
                                    <div class="weight-600">{{$value->nama}}</div>
                                </div>
                            </div>
                        </td>
                        {{-- <td>12108633</td> --}}
                        <td>{{$value->rayon}}</td>
                        <td>{{$value->rombel}}4</td>
                        <td>{{$value->keterangan}}</td>
                        {{-- <td>{{asset('fotoPrestasi/'.$pem->foto)}}</td> --}}
                        <td>
                            <div class="table-actions">
                                <a href="#" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <form action{{ route('absensi.delete',['id' => $value->id] )}}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">
                                        <i class="icon-copy dw dw-delete-3"></i>
                                    </button>
                                </form>
                                {{-- <a href="#" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a> --}}
                            </div>
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
