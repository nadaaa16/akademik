<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;


use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|integer',
            'tingkat' => 'required',
            'rayon' => 'required',
            'jk' => 'required|in:laki-laki,perempuan', // Sesuaikan dengan nilai yang digunakan dalam ENUM
        ]);

        $siswa = Pengguna::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'tingkat' => $request->tingkat,
            'rayon' => $request->rayon,
            'jk' => $request->jk,
        ]);
        return redirect()->route('data-siswa');
        
    }

    // public function delete($id)
    // {
    //     $codePelanggaran = CodePelanggaran::findOrFail($id);
    //     return view('admin.catatan.delete', compact('codePelanggaran'));
    // }

    public function confirmDelete(Request $request, $id)
    {
        $siswa = Pengguna::findOrFail($id);
        $siswa->delete();
        return redirect()->route('data-siswa')->with('success', 'Data berhasil dihapus');
    }

    public function dataSiswa(){
        return view('data-siswa');
    }

    // public function siswa()
    // {
    //     $siswaList = Pengguna::all();
    //     // return view('siswa.tambah-data',);
    //     return view('siswa.data-siswa', ['siswaList' => $siswaList]);
    // }
    // public function tambahSiswa()
    // {
    //     return view('siswa.tambah-data');
    // }

    // public function store(Request $request)
    // {
    //     $siswa = Pengguna::create([
    //         'nama' => $request->input('nama'),
    //         'nis' => $request->input('nis'),
    //         'tingkat' => $request->input('tingkat'),
    //         'rayon' => $request->input('rayon'),
    //         'jk' => $request->input('jk'),
    //     ]);

    //     return redirect('/siswa');
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'nama' => 'required|max:255',
    //         'nis' => 'required|max:8',
    //         'tingkat' => 'required|max:8',
    //         'rayon' => 'required|max:8',
    //         'jk' => 'required',   


    //     ]);
    //     Pengguna::find($id)->update($request->all());
    //     // dd($request);
    //     return redirect()->route('siswa')->with('success', 'Product updated successfully');
    // }

    // public function edit($id)
    // {
    //     $siswa = Pengguna::find($id)->first();
    //     return view('siswa.edit-siswa', ['siswa' => $siswa]);
    // }

  
    // public function destroy($id){
    //     Pengguna::find($id)->delete();
    //     return redirect()->route('siswa');
    // }
}