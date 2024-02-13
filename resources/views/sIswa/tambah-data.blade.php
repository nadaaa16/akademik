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
<form action="siswa/store" method="post">
    @csrf
    <input type="text" id="nama" name="nama"><br><br>
    <label >nis</label>
    <input type="number" id="nis" name="nis"><br><br>
    <label>tingkat</label>
    <input type="text" id="tingkat" name="tingkat"><br><br>
    <label >rayon</label>
    <input type="text" id="rayon" name="rayon"><br><br>
    <div class="form-floating mt-3 mb-3">
        <select class="form-control" name="jk" >
          <option value="">pilih</option>
          <option value="laki-laki">laki-laki</option>
          <option value="perempuan">perempuan</option>
        </select>
        <label for="jenis_kelamin">Jenis Kelamin</label>
      </div>
    <input type="submit" value="Submit">
  </form>