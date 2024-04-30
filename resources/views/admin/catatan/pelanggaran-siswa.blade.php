@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Pelangaran Siswa')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Pelangaran Siswa</h2>
</div>



<div class="xs-pd-20-10 pd-ltr-20" style="margin-top: 20px;">
    <button class="btn btn-primary float-right" type="button" onclick="window.location.href='pelanggaran-siswa-create'">
        <i class="bi bi-plus-lg">Pelangaran Siswa</i>
    </button>
</div>
<div class="xs-pd-20-10 pd-ltr-20" style="margin-top: 20px;">
    <button class="btn btn-primary float-right" type="button">
        <a href="{{ route('pelanggaran.exportPdf') }}">Export Pelangaran Siswa</i>
    </button>
</div>
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="card-box pb-10">
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="table-plus">Nama</th>
                        <th>Code Pelangaran</th>
                        <th>Rayon</th>
                        <th>Tingkat</th>
                        <th>Foto</th>
                        <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggaran as $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="txt">
                                    <div class="weight-600">{{$value->nama}}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{$value->codePelanggaran}}</td>
                        <td>{{$value->rayon}}</td>
                        <td>{{$value->rombel}}</td>
                        <td>
                            @if($value->img !='')
                            <a href="#" data-toggle="modal" data-target="#pelanggaranModal{{$value->id}}">
                                <img src="{{asset('fotoPelanggaran/'.$value->img)}}" alt="" width="70px">
                            </a>
                            @else
                            <img src="{{asset('img/bg_1.jpg')}}" alt="" width="75px" >
                            @endif
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="/pelanggaran-siswa-edit/{{$value->id}}" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <form action="{{ route('pelanggaran.delete',['id' => $value->id] )}}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete" style="background: none; border: none;">
                                        <i class="icon-copy dw dw-delete-3" style="font-size: 1.2rem; color: red; cursor: pointer;"></i>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                
                    <div class="modal fade" id="pelanggaranModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="pelanggaranModalLabel{{$value->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="pelanggaranModalLabel{{$value->id}}">{{$value->codePelanggaran}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{asset('fotoPelanggaran/'.$value->img)}}" class="img-fluid" alt="Foto Pelanggaran">
                                    <p>Nama: {{$value->nama}}</p>
                                    <p>Rayon: {{$value->rayon}}</p>
                                    <p>Rombel: {{$value->rombel}}</p>
                                    <p>Catatan: {{$value->catatan}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
