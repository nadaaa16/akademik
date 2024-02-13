<?php

namespace App\Http\Controllers;

use App\Models\PelanggaranAdmin;
use App\Models\CodePelanggaran;
use App\Models\Pengguna;
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
        $pelanggaran = PelanggaranAdmin::all();
        return view('admin.catatan.pelanggaran-siswa', compact('pelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataSiswa = Pengguna::all();
        $codePelanggaran = CodePelanggaran::all();
        return view('admin.catatan.pelanggaran-siswa-create', compact('codePelanggaran', 'dataSiswa'));
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
            'catatan' => 'required',
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

        // $pelanggaran['bukti'] = request()->file('bukti')->store('bukti-img');

        PelanggaranAdmin::create([
            'nama'=> $request->nama,
            'codePelanggaran' => $request->codePelanggaran,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'img' => $uploaded,
            'catatan' => $request->catatan,
        ]);

        return redirect()->route('pelanggaran-siswa')->with('success', 'Berhasil menambahakan pelanggaran');
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
