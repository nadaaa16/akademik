<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
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
}
