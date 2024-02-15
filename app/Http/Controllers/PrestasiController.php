<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Prestasi;
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
        $dataSiswa = Pengguna::all();
        $prestasi = Prestasi::all();
        return view('admin.catatan.add-prestasi', compact('prestasi', 'dataSiswa'));
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
            'nama' => 'required',
            'namaEkskul' => 'required',
            'namaLomba' => 'required',
            'tingkat' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // menambahkan validasi untuk gambar
            'deskripsi' => 'required',
        ]);
    
        try {
            $image = $request->file('foto');
            $imgName = time().rand().'.'.$image->extension();
            $destinationPath = public_path('/fotoPrestasi');
            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
    
            Prestasi::create([
                'nama'=> $validatedData['nama'],
                'namaEkskul' => $validatedData['namaEkskul'],
                'namaLomba' => $validatedData['namaLomba'],
                'tingkat' => $validatedData['tingkat'],
                'foto' => $uploaded,
                'deskripsi' => $validatedData['deskripsi'],
            ]);
    
            return redirect()->route('prestasi-siswa')->with('success', 'Berhasil menambahkan prestasi');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan kesalahan
            return back()->withInput()->withErrors(['error' => 'Gagal menambahkan prestasi. Silakan coba lagi.']);
        }
    }
    

    public function delete($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin.catatan.delete', compact('prestasi'));
    }

    public function confirmDelete(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        return redirect()->route('prestasi-siswa')->with('success', 'Data berhasil dihapus');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Prestasi::find($id);
        $dataSiswa = Pengguna::all();
        $prestasi = Prestasi::all();
        return view('admin.catatan.edit-prestasi', compact('data', 'prestasi', 'dataSiswa'));
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
            'nama' => 'required',
            'namaEkskul' => 'required',
            'namaLomba' => 'required',
            'tingkat' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama'] = $request->nama;
        $data['namaEkskul'] = $request->namaEkskul;
        $data['namaLomba'] = $request->namaLomba;
        $data['tingkat'] = $request->tingkat;
        $data['foto'] = $request->foto;
        $data['deskripsi'] = $request->deskripsi;

        Prestasi::whereId($id)->update($data);

        return redirect()->route('prestasi-siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $prestasi)
    {
        //
    }
}
