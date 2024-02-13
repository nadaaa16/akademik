<?php

namespace App\Http\Controllers;
use App\Models\CodePelanggaran;
use Illuminate\Http\Request;

class CodePelanggaranController extends Controller
{
    // public function index()
    // {
    //     $codes = $data->json('data');
    //     return view('index')->with('codes' , $codes);
    // }
    
    public function storeCodePelanggaran(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'deskripsi' => 'required',

        ]);

        CodePelanggaran::create([
            'code' => $request->code,
            'deskripsi'=> $request->deskripsi,
        ]);
        // $data = [
        //     'code' => $request->code, // Memastikan bahwa 'code' tidak boleh kosong
        //     'deskripsi' => $request->deskripsi,
        // ];
        // CodePelanggaran::create($data);
        return redirect()->route('view-code');
        
    }

    public function delete($id)
    {
        $codePelanggaran = CodePelanggaran::findOrFail($id);
        return view('admin.catatan.delete', compact('codePelanggaran'));
    }

    public function confirmDelete(Request $request, $id)
    {
        $codePelanggaran = CodePelanggaran::findOrFail($id);
        $codePelanggaran->delete();
        return redirect()->route('view-code')->with('success', 'Data berhasil dihapus');
    }

    public function code(){
        return view('admin.catatan.add-code');
    }
}
