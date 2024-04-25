<?php

namespace App\Http\Controllers;
use App\Models\CodePelanggaran;
use Illuminate\Http\Request;

class CodePelanggaranController extends Controller
{
    public function index()
    {
        $codePelanggaran = CodePelanggaran::all();
        return view('admin.catatan.code-pelanggaran', compact('codePelanggaran'));
    }

    public function create()
    {
        return view('admin.catatan.code-pelanggaran-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'deskripsi' => 'required',

        ]);

        CodePelanggaran::create([
            'code' => $request->code,
            'deskripsi'=> $request->deskripsi,
        ]);
        return redirect()->route('code.pelanggaran');

    }

    public function destroy($id)
    {
        $data = CodePelanggaran::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('code.pelanggaran');
    }
}
