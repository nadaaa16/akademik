<?php

namespace App\Http\Controllers;

use App\Models\PelanggaranAdmin;
use App\Models\CodePelanggaran;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PelanggaranController extends Controller
{
    public function index()
    {
        $pelanggaran = PelanggaranAdmin::all();
        return view('admin.catatan.pelanggaran-siswa', compact('pelanggaran'));
    }


    public function create()
    {
        $dataSiswa = Pengguna::all();
        $codePelanggaran = CodePelanggaran::all();
        return view('admin.catatan.pelanggaran-siswa-create', compact('codePelanggaran', 'dataSiswa'));
    }


    public function store(Request $request)
    {
        $prestasi = $request->validate([
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

         PelanggaranAdmin::create([
            'nama'=> $request->nama,
            'codePelanggaran' => $request->codePelanggaran,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'img' => $uploaded,
            'catatan' => $request->catatan,
            // 'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('pelanggaran.siswa')->with('success', 'Berhasil menambahakan pelanggaran');
    }


    public function show($id)
    {
        $pelanggaran = PelanggaranAdmin::findOrFail($id);
        return view('admin.catatan.view-pelanggaran', compact('pelanggaran'));
    }


    public function edit(Request $request, $id)
    {
        $data = PelanggaranAdmin::find($id);
        $dataSiswa = Pengguna::all();
        $codePelanggaran = CodePelanggaran::all();
        return view('admin.catatan.pelanggaran-siswa-edit', compact('data', 'codePelanggaran', 'dataSiswa'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'codePelanggaran' => 'required',
            'rayon' => 'required',
            'rombel' => 'required',
            'img' => 'required',
            'catatan' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama'] = $request->nama;
        $data['codePelanggaran'] = $request->codePelanggaran;
        $data['rayon'] = $request->rayon;
        $data['rombel'] = $request->rombel;
        $data['img'] = $request->img;
        $data['catatan'] = $request->catatan;

        PelanggaranAdmin::whereId($id)->update($data);

        return redirect()->route('pelanggaran.siswa');
    }

    
    public function destroy($id)
    {
        $data = PelanggaranAdmin::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('pelanggaran.siswa');
    }
}
