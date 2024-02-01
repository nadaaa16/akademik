<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function catatanSiswa()
    {
        return view('admin.catatan-siswa');
    }

    //code
    public function viewCode()
    {
        return view('admin.view-code');
    }

    public function addCode()
    {
        return view('admin.add-code');
    }

    //catatan
    public function viewCatatan()
    {
        return view('admin.view-catatan');
    }

    public function addCatatan()
    {
        return view('admin.add-catatan');
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
}
