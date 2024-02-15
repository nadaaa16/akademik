<?php

namespace App\Http\Controllers;
use App\Models\CodePelanggaran;
use App\Models\Prestasi;
use App\Models\PelanggaranAdmin;
use App\Models\Absensi;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //dashboard
    public function dashboard()
    {
        $dataSiswa = Pengguna::count();
        $totalPrestasi = Prestasi::count();
        $totalPelanggaran = PelanggaranAdmin::count();
        return view('admin.dashboard', compact('totalPrestasi', 'totalPelanggaran', 'dataSiswa'));
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
        $pelanggaran = PelanggaranAdmin::all();
        return view('admin.catatan.pelanggaran-siswa', compact('pelanggaran'));
    }

    public function detail_pelanggaran($id)
    {
        $pel = PelanggaranAdmin::findOrFail($id);
        return view('admin.catatan.view-pelanggaran', compact('pel'));
    }

    public function addPelanggaranSiswa()
    {
        return view('admin.catatan.pelanggaran-siswa-create');
    }

    // public function addPelanggaranSiswa()
    // {
    //     return view('admin.catatan.add-pelanggaran');
    // }
    // public function pelanggaranSiswa()
    // {
    //     return view('admin.catatan.pelanggaran-siswa');
    // }
    // public function addPelanggaran()
    // {
    //     return view('admin.catatan.add-pelanggaran');
    // }
    // public function viewPelanggaran()
    // {
    //     return view('admin.catatan.view-pelanggaran');
    // }

    //prestasi
    public function prestasiSiswa()
    {
        $prestasi = Prestasi::all();
        return view('admin.catatan.prestasi-siswa', compact('prestasi'));
    }

    public function detail_prestasi($id)
    {
        $pem = Prestasi::findOrFail($id);
        return view('admin.catatan.view-prestasi', compact('pem'));
    }

    public function addPrestasiSiswa()
    {
        return view('admin.catatan.add-prestasi');
    }

    //data siswa
    public function dataSiswa()
    {
        $dataSiswa = Pengguna::all();
        return view('admin.data-siswa', compact('dataSiswa'));
    }

    // public function detail_siswa($id)
    // {
    //     $pel = Pengguna::findOrFail($id);
    //     return view('admin.catatan.view-pelanggaran', compact('pel'));
    // }

    public function addSiswa()
    {
        return view('admin.add-siswa');
    }

    // //data siswa (user)
    // public function dataSiswa()
    // {
    //     return view('admin.data-siswa');
    // }

    // public function addSiswa()
    // {
    //     return view('admin.add-siswa');
    // }

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
        $absn = Absensi::all();
        $absensi = Absensi::all();
        return view('admin.absensi.absensi', compact('absensi', 'absn'));
    }

    // public function detail_absensi($id)
    // {
    //     $absen = Absensi::findOrFail($id);
    //     return view('admin.absensi.view-absensi', compact('absen'));
    // }

    public function addAbsensi()
    {
        return view('admin.absensi.add-absensi');
    }

    // public function absensi()
    // {
    //     return view('admin.absensi.absensi');
    // }

    // public function addAbsensi()
    // {
    //     return view('admin.absensi.add-absensi');
    // }


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
