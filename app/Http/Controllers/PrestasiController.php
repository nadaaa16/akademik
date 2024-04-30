<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Prestasi;
use App\Models\Rayon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('admin.catatan.prestasi-siswa', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rayon = Rayon::distinct()->pluck('rayon');
    
        $dataSiswa = Pengguna::distinct()->pluck('nama');
        return view('admin.catatan.prestasi-siswa-create', compact('rayon', 'dataSiswa'));
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
        $validatedData = $request->validate([
            'rayon' => 'required',
            'nama' => 'required',
            'namaEkskul' => 'required',
            'namaLomba' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
        ]);

        $image = $request->file('foto');
        $imgName = time().rand().'.'.$image->extension();
        if(!file_exists(public_path('/fotoPrestasi'.$image->getClientOriginalName()))){
            $destinationPath = public_path('/fotoPrestasi');
            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        }else{
            $uploaded = $image->getClientOriginalName();
        }

         Prestasi::create([
            'rayon' => $request->rayon,
            'nama'=> $request->nama,
            'namaEkskul' => $request->namaEkskul,
            'namaLomba' => $request->namaLomba,
            'foto' => $uploaded,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('prestasi.siswa')->with('success', 'Berhasil menambahakan prestasi');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin.catatan.prestasi-siswa-show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $rayon = Rayon::distinct()->pluck('rayon');
        $data = Prestasi::find($id);
        $dataSiswa = Pengguna::all();
        $prestasi = Prestasi::all();
        return view('admin.catatan.prestasi-siswa-edit', compact('data', 'prestasi', 'dataSiswa', 'rayon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'rayon' => 'required',
            'nama' => 'required',
            'namaEkskul' => 'required',
            'namaLomba' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['rayon'] = $request->rayon;
        $data['nama'] = $request->nama;
        $data['namaEkskul'] = $request->namaEkskul;
        $data['namaLomba'] = $request->namaLomba;
        $data['foto'] = $request->foto;
        $data['deskripsi'] = $request->deskripsi;

        Prestasi::whereId($id)->update($data);

        return redirect()->route('prestasi.siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Prestasi::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('prestasi.siswa');
    }

    public function exportPdf()
    {
        $prestasi = Prestasi::all();
        $pdf = Pdf::loadView('pdf.export-prestasi', ['prestasi' => $prestasi]);
        return $pdf->download('prestasi.pdf');
    }
}
