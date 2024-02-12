<h1>Siswa</h1>
@if ($errors->any())
<div class="alert alert-danger w-50">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('update-data', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" value="{{ $siswa->nama }}">

    <label for="nis">NIS</label>
    <input type="number" id="nis" name="nis" value="{{ $siswa->nis }}"><br><br>

    <label for="tingkat">Tingkat</label>
    <input type="text" id="tingkat" name="tingkat" value="{{ $siswa->tingkat }}"><br><br>

    <label for="rayon">Rayon</label>
    <input type="text" id="rayon" name="rayon" value="{{ $siswa->rayon }}"><br><br>

    <div class="form-floating mt-3 mb-3">
        <select class="form-control" name="jk">
            <option value="">pilih</option>
            <option value="laki-laki" {{ $siswa->jk == 'laki-laki' ? 'selected' : '' }}>laki-laki</option>
            <option value="perempuan" {{ $siswa->jk == 'perempuan' ? 'selected' : '' }}>perempuan</option>
        </select>
        <label for="jk">Jenis Kelamin</label>
    </div>

    <input type="submit" value="Submit">
</form>
