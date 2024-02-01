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
    $data = [
        'code' => $request->code, // Memastikan bahwa 'code' tidak boleh kosong
        'deskripsi' => $request->deskripsi,
    ];
    CodePelanggaran::create($data);
    return back();
    
}
public function code(){
    return view('admin.add-code');
}
}
