<?php

namespace App\Http\Controllers;

use App\Models\PelanggaranAdmin;
use Illuminate\Http\Request;

class PelanggaranAdminController extends Controller
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
        $pelanggaran = $request->validate([
            'nama' => 'required',
            'codePelanggaran' => 'required',
            'rayon' => 'required',
            'rombel' => 'required',
            'img' => 'required',
            'deskripsi' => 'required',

        ]);
        $image = $request->file('img');
        $imgName = time().rand().'.'.$image->extension();
        if(!file_exists(public_path('/fotoPelanggaran'.$image->getClientOriginalName()))){
            $destinationPath = public_path('/fotoPelanggaran');
            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        }else{
            $uploaded = $image->getClientOriginalName();
        }

        // $prestasi['bukti'] = request()->file('bukti')->store('bukti-img');

        PelanggaranAdmin::create([
            'nama'=> $request->nama,
            'codePelanggaran' => $request->codePelanggaran,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'img' => $uploaded,
            'deskripsi' => $request->deskripsi,
            // 'user_id' => Auth::user()->id,

        ]);

        return redirect()->route('pelanggaran-siswa')->with('success', 'Berhasil menambahakan Pelanggaran');
    }

    public function delete($id)
    {
        $pelanggaran = PelanggaranAdmin::findOrFail($id);
        return view('admin.catatan.delete', compact('pelanggaran'));
    }

    public function confirmDelete(Request $request, $id)
    {
        $pelanggaran = PelanggaranAdmin::findOrFail($id);
        $pelanggaran->delete();
        return redirect()->route('pelanggaran-siswa')->with('success', 'Data berhasil dihapus');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PelanggaranAdmin  $pelanggaranAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(PelanggaranAdmin $pelanggaranAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PelanggaranAdmin  $pelanggaranAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(PelanggaranAdmin $pelanggaranAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PelanggaranAdmin  $pelanggaranAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PelanggaranAdmin $pelanggaranAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PelanggaranAdmin  $pelanggaranAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(PelanggaranAdmin $pelanggaranAdmin)
    {
        //
    }
}
