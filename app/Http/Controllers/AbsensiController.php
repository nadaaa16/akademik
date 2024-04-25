<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use App\Models\Absensi;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi = Absensi::all();
        return view('admin.absensi.absensi-siswa', compact('absensi'));
    }

    // public function createtoken(){
    //     return csrf_token();
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rayon = Rayon::distinct()->pluck('rayon');
        $dataSiswa = Pengguna::all();
        return view('admin.absensi.absensi-siswa-create', compact('dataSiswa', 'rayon'));
    }

    public function getStudentsByRayon(Request $request)
    {
        $rayon = $request->rayon;
        $namaSiswa = Pengguna::where('rayon', $rayon)->pluck('nama');
        return response()->json($namaSiswa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $absensi = $request->validate([
            'nama' => 'required',
            'rayon' => 'required',
            'rombel' => 'required',
            'keterangan' => 'required',
            'img' => 'required',
        ]);
        // dd($absensi, $request->all());
        $image = $request->file('img');
        $imgName = time().rand().'.'.$image->extension();
        if(!file_exists(public_path('/fotoAbsensi'.$image->getClientOriginalName()))){
            $destinationPath = public_path('/fotoAbsensi');
            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        }else{
            $uploaded = $image->getClientOriginalName();
        }

         Absensi::create([
            'nama'=> $request->nama,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'keterangan' => $request->keterangan,
            'img' => $uploaded,

        ]);

        return redirect()->route('absensi.siswa')->with('success', 'Berhasil menambahakan absensi');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absen = Absensi::findOrFail($id);
        return view('admin.absensi.absensi-siswa-show', compact('absen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rayon = Rayon::distinct()->pluck('rayon');
        $data = Absensi::find($id);
        return view('admin.absensi.absensi-siswa-edit', compact('data', 'rayon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'rayon' => 'required',
            'rombel' => 'required',
            'keterangan' => 'required',
            'img' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama'] = $request->nama;
        $data['rayon'] = $request->rayon;
        $data['rombel'] = $request->rombel;
        $data['keterangan'] = $request->keterangan;
        $data['img'] = $request->img;

        Absensi::whereId($id)->update($data);

        return redirect()->route('absensi.siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Absensi::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('absensi.siswa');
    }
}
