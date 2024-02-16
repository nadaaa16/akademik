<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    public function index()
    {
        $dataGuru = Guru::all();
        return view('admin.data-guru', compact('dataGuru'));
    }

    public function create()
    {
        $dataGuru = Guru::all();
        return view('admin.data-guru-create', compact('dataGuru'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'              => 'required',
            'nik'               => 'required|integer',
            'pembimbingRayon'   => 'required',
            'mapel'             => 'required',
            'jk'                => 'required|in:laki-laki,perempuan',
        ]);

        Guru::create([
            'nama'              => $request->nama,
            'nik'               => $request->nik,
            'pembimbingRayon'   => $request->pembimbingRayon,
            'mapel'             => $request->mapel,
            'jk'                => $request->jk,
        ]);

        return redirect()->route('data.guru');
    }

    public function edit($id)
    {
        $data = Guru::find($id);
        $dataGuru = Guru::all();
        return view('admin.data-guru-edit', compact('data', 'dataGuru'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'nama'              => 'required',
            'nik'               => 'required|integer',
            'pembimbingRayon'   => 'required',
            'mapel'             => 'required',
            'jk'                => 'required|in:laki-laki,perempuan',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama'] = $request->nama;
        $data['nik'] = $request->nik;
        $data['pembimbingRayon'] = $request->pembimbingRayon;
        $data['mapel'] = $request->mapel;
        $data['jk'] = $request->jk;

        Guru::whereId($id)->update($data);

        return redirect()->route('data.guru');
    }

    public function destroy($id)
    {
        $data = Guru::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('data.guru');
    }

}
