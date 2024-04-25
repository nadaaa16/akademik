<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Rayon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function index()
    {
        $dataSiswa = Pengguna::all();
        return view('admin.data-siswa', compact('dataSiswa'));
    }

    public function create()
    {
        $dataSiswa = Pengguna::all();
        $rayon = Rayon::all();
        return view('admin.data-siswa-create', compact('dataSiswa', 'rayon'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|integer',
            'tingkat' => 'required',
            'rayon' => 'required',
            'jk' => 'required|in:laki-laki,perempuan',
        ]);

        Pengguna::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'tingkat' => $request->tingkat,
            'rayon' => $request->rayon,
            'jk' => $request->jk,
        ]);
        return redirect()->route('data.siswa');
    }

    public function edit($id)
    {
        $data = Pengguna::find($id);
        $dataSiswa = Pengguna::all();
        return view('admin.data-siswa-edit', compact('data', 'dataSiswa'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'nis' => 'required',
            'tingkat' => 'required',
            'rayon' => 'required',
            'jk' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama'] = $request->nama;
        $data['nis'] = $request->nis;
        $data['tingkat'] = $request->tingkat;
        $data['rayon'] = $request->rayon;
        $data['jk'] = $request->jk;

        Pengguna::whereId($id)->update($data);

        return redirect()->route('data.siswa');
    }

    public function destroy($id)
    {
        $data = Pengguna::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('data.siswa');
    }

    // public function destroy(Request $request, $id)
    // {
    // try {
    //     $dataSiswa = Pengguna::findOrFail($id);
    //     $dataSiswa->delete();
    //     return redirect()->route('data.siswa')->with('success', 'Data berhasil dihapus');
    // } catch (ModelNotFoundException) {
    //     return redirect()->route('data.siswa')->with('error', 'Data tidak ditemukan');
    // }
    // }
}
