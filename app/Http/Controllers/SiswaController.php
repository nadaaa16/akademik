<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;


use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa()
    {
        $siswaList = Pengguna::all();
        // return view('siswa.tambah-data',);
        return view('siswa.data-siswa', ['siswaList' => $siswaList]);
    }
    public function tambahSiswa(){  
                return view('siswa.tambah-data');

    }

        public function store(Request $request){
            $siswa = Pengguna::create([
                'nama' => $request->input('nama'),
                'nis' => $request->input('nis'),
                'tingkat' => $request->input('tingkat'),
                'rayon' => $request->input('rayon'),
                'jk' => $request->input('jk'),
            ]);
        
            return redirect('/siswa');
        }
}
