<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return view('admin.data-guru');
    }

    public function create()
    {
        return view('admin.data-guru-create');
    }
}
