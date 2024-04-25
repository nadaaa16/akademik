@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Edit Pelanggaran Siswa')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Edit Pelanggaran Siswa</h2>
</div>

<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <h2 style="margin-top: 20px;">Edit Pelanggaran Kepada Siswa</h2>
    <form action="{{ route('pelanggaran.update',['id' =>$data->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="rayon" class="form-label mt-4">Rayon</label>
                    <select class="form-control" id="rayon" name="rayon">
                        @foreach($rayon as $r)
                            <option value="{{ $r }}" @if($data->rayon == $r) selected @endif>{{ $r }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="nama" class="form-label mt-4">Nama Siswa</label>
                    <select class="form-control" id="nama" name="nama">
                        @foreach($dataSiswa as $s)
                            <option value="{{ $s->nama }}" @if($data->nama == $s->nama) selected @endif>{{ $s->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>        
    {{-- </div> --}}
    <div class="row">
        <div class="col">
            <label for="codePelanggaran" class="form-label mt-4">Code Pelangaran</label>
            <select name="codePelanggaran" id="codePelanggaran" class="form-control" value="{{ $data->codePelanggaran}}">
                <option value="">Code Pelangaran</option>
                @foreach ($codePelanggaran as $value)
                    <option value="{{ $value->code }}">{{ $value->code }} - {{ $value->deskripsi }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="rombel" class="form-label mt-4">Kelas / Rombel</label>
            <input type="text" name="rombel" id="rombel" class="form-control" placeholder="Kelas / Rombel"value="{{ $data->rombel}}">
        </div>
    </div>
	<div class="mb-3">
		<label for="formFileMultiple" class="form-label">Tambahkan Foto</label>
		<input class="form-control" name="img" type="file" id="formFileMultiple" multiple>
	</div>
    <div class="mb-3">
        <label for="catatan" class="form-label">Catatan</label>
        <textarea class="form-control" id="catatan" name="catatan" rows="3">{{ $data->catatan}}</textarea>
    </div>
    <div class="xs-pd-20-10 pd-ltr-20">
        <button class="btn btn-primary float-right" type="submit">Simpan</button>
    </div>
</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#rayon').on('change', function() {
            var rayon = $(this).val();
            $.ajax({
                url: '{{ route("prestasi.getStudentsByRayon") }}',
                type: 'GET',
                data: {
                    rayon: rayon
                },
                success: function(data) {
                    $('#nama').empty();
                    $.each(data, function(index, nama) {
                        $('#nama').append('<option value="' + nama + '">' + nama + '</option>');
                    });
                }
            });
        });
    });
</script>


<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
