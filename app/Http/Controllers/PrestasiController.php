<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('admin.catatan.prestasi-siswa', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataSiswa = Pengguna::all();
        $prestasi = Prestasi::all();
        return view('admin.catatan.add-prestasi', compact('prestasi', 'dataSiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prestasi = $request->validate([
            'nama' => 'required',
            'namaEkskul' => 'required',
            'namaLomba' => 'required',
            'tingkat' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
        ]);
        
        $image = $request->file('foto');
        $imgName = time().rand().'.'.$image->extension();
        if(!file_exists(public_path('/fotoPrestasi'.$image->getClientOriginalName()))){
            $destinationPath = public_path('/fotoPrestasi');
            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        }else{
            $uploaded = $image->getClientOriginalName();
        }

        // $prestasi['bukti'] = request()->file('bukti')->store('bukti-img');

         Prestasi::create([
            'nama'=> $request->nama,
            'namaEkskul' => $request->namaEkskul,
            'namaLomba' => $request->namaLomba,
            'tingkat' => $request->tingkat,
            'foto' => $uploaded,
            'deskripsi' => $request->deskripsi,
            // 'user_id' => Auth::user()->id,

        ]);

        return redirect()->route('prestasi-siswa')->with('success', 'Berhasil menambahakan prestasi');
    }

    public function delete($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin.catatan.delete', compact('prestasi'));
    }

    public function confirmDelete(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        return redirect()->route('prestasi-siswa')->with('success', 'Data berhasil dihapus');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Prestasi::find($id);
        $dataSiswa = Pengguna::all();
        $prestasi = Prestasi::all();
        return view('admin.catatan.edit-prestasi', compact('data', 'prestasi', 'dataSiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'namaEkskul' => 'required',
            'namaLomba' => 'required',
            'tingkat' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama'] = $request->nama;
        $data['namaEksul'] = $request->namaEkskul;
        $data['namaLomba'] = $request->namaLomba;
        $data['tingkat'] = $request->tingkat;
        $data['foto'] = $request->foto;
        $data['deskripsi'] = $request->deslripsi;

        Prestasi::whereId($id)->update($data);

        return redirect()->route('prestasi-siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $prestasi)
    {
        //
    }
}
