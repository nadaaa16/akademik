<?php

namespace App\Http\Controllers;
use App\Models\CodePelanggaran;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    //code
    public function viewCode()
    {
        // $data=CodePelanggaran::All();
        // dd($data);
        $codePelanggaran = CodePelanggaran::all();
        return view('admin.catatan.view-code', compact('codePelanggaran'));
    }

    
    public function addCode()
    {
        return view('admin.add-code');
    }

    //pelanggaran
    public function pelanggaranSiswa()
    {
        return view('admin.catatan.pelanggaran-siswa');
    }
    public function addPelanggaran()
    {
        return view('admin.catatan.add-pelanggaran');
    }
    public function viewPelanggaran()
    {
        return view('admin.catatan.view-pelanggaran');
    }

    //prestasi
    public function prestasiSiswa()
    {
        return view('admin.prestasi-siswa');
    }
    public function addPrestasiSiswa()
    {
        return view('admin.add-prestasi');
    }

    //data siswa (user)
    public function dataSiswa()
    {
        return view('admin.data-siswa');
    }

    public function addSiswa()
    {
        return view('admin.add-siswa');
    }

    //data guru (user)
    public function dataGuru()
    {
        return view('admin.data-guru');
    }

    public function addGuru()
    {
        return view('admin.add-guru');
    }

    //data absensi
    public function absensi()
    {
        return view('admin.absensi.absensi');
    }

    public function addAbsensi()
    {
        return view('admin.absensi.add-absensi');
    }


    //SISWA
    public function dashboardSiswa()
    {
        return view('siswaAsli.dashboard-siswa');
    }
    public function catatan()
    {
        return view('siswaAsli.catatan');
    }
    public function detailPelanggaran()
    {
        return view('siswaAsli.view-pelanggaran');
    }
    public function prestasi()
    {
        return view('siswaAsli.prestasi');
    }
}
