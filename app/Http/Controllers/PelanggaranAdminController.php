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
        return view('admin.catatan.pelanggaran-siswa-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         dd($request->all());
        $request->validate([
            'nama' => 'required',
            'codePelanggaran' => 'required',
            'rayon' => 'required',
            'rombel' => 'required',
            'img' => 'nullable',
            'catatan' => 'required',

        ]);

        if ($request->hash('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'public/fotoPelanggaran';
            $file->move($path, $filename);
        }

        PelanggaranAdmin::create([
            'nama'=> $request->nama,
            'codePelanggaran' => $request->codePelanggaran,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'img' => $path,$filename,
            'catatan' => $request->catatan,
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
