<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit(Prestasi $prestasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        //
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
