<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\CodePelanggaranController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PelanggaranAdminController;
use App\Http\Controllers\AbsensiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'regis']);

Route::get('/halaman-login', [AuthController::class, 'index'])->name('login');
Route::post('/halaman-login/auth', [AuthController::class, 'auth'])->name('login.auth');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::view('/halaman-login','halaman-login');
// Route::view('/halaman-dashboard','halaman-dashboard');
// Route::view('/halaman-dashboard2','halaman-dashboard2');
    

//admin
Route::get('/catatan-siswa', [adminController::class, "catatanSiswa"]);
Route::get('/add-catatan', [adminController::class, "addCatatan"]);
Route::view('/catatan-siswa','catatan-siswa');
//siswa
Route::get('/siswa', [SiswaController::class, "siswa"])->name('siswa');
Route::get('/tambah-siswa', [SiswaController::class, "tambahSiswa"]);
Route::post('/siswa/store', [SiswaController::class, 'store']);

Route::get('/code', [CodePelanggaranController::class, "code"]);
Route::post('/add-code', [CodePelanggaranController::class, "storeCodePelanggaran"])->name('pelanggaran.store');
Route::get('/view-code', [adminController::class, "viewCode"])->name('view-code');
Route::get('/code/{id}/delete', [CodePelanggaranController::class, "delete"])->name('delete-code');
Route::delete('/code/{id}', [CodePelanggaranController::class, "confirmDelete"])->name('confirm-delete-code');

Route::get('/prestasi-siswa', [adminController::class, "prestasiSiswa"])->name('prestasi-siswa');
Route::get('/add-prestasi', [adminController::class, "addPrestasiSiswa"]);
Route::post('/prestasi/store', [PrestasiController::class, 'store'])->name('prestasi.store');
Route::get('/prestasi', [adminController::class, 'viewPrestasi']);
Route::delete('/prestasi/{id}', [PrestasiController::class, "confirmDelete"])->name('confirm-delete');
Route::get('/view-prestasi/{id}', [adminController::class, "detail_prestasi"]);

Route::get('/pelanggaran-siswa', [adminController::class, "pelanggaranSiswa"])->name('pelanggaran-siswa');
Route::get('/add-pelanggaran', [adminController::class, "addPelanggaranSiswa"]);
Route::post('/pelanggaran/store', [PelanggaranAdminController::class, 'store'])->name('pelanggaran.store');
Route::get('/pelanggaran', [adminController::class, 'viewPelanggaran']);
Route::delete('/pelanggaran/{id}', [PelanggaranAdminController::class, "confirmDelete"])->name('confirm-delete');
Route::get('/view-pelanggaran/{id}', [adminController::class, "detail_pelanggaran"]);

Route::get('/absensi', [adminController::class, "absensi"])->name('absensi');
Route::get('/add-absensi', [adminController::class, "addAbsensi"]);
Route::post('/absensi/store', [AbsensiController::class, 'store'])->name('absensi.store');
Route::get('/absensi', [adminController::class, 'viewabsensi']);
Route::delete('/absensi/{id}', [AbsensiController::class, "confirmDelete"])->name('confirm-delete');
Route::get('/view-absensi/{id}', [adminController::class, "detail_absensi"]);

Route::get('/data-siswa', [adminController::class, "dataSiswa"]);
Route::get('/add-siswa', [adminController::class, "addSiswa"]);
Route::get('/data-guru', [adminController::class, "dataGuru"]);
Route::get('/add-guru', [adminController::class, "addGuru"]);
//dashboard admin (ini klo pake yang dashboad2 menampilkan semua yang ada di dashboad2)
Route::get('/dashboard', [adminController::class, "dashboard"]);

//siswa
Route::get('/siswa', [SiswaController::class, "siswa"])->name('siswa');
Route::get('/tambah-siswa', [SiswaController::class, "tambahSiswa"]);
Route::post('/siswa/store', [SiswaController::class, 'store']);

//siswaAsli controller masi pake yang admin
Route::get('/dashboard-siswa', [adminController::class, "dashboardSiswa"]);
Route::get('/catatan', [adminController::class, "catatan"]);
//pelanggaran itu catatan belom di ganti
Route::get('/view-pelanggaran', [adminController::class, "detailPelanggaran"]);
Route::get('/prestasi', [adminController::class, "prestasi"]);