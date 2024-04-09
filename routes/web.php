<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\CodePelanggaranController;

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

//auth
Route::get('/', function () {return view('welcome');});
Route::get('/token', [AbsensiController::class, 'createtoken']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'regis']);
Route::get('/halaman-login', [AuthController::class, 'index'])->name('login');
Route::post('/halaman-login/auth', [AuthController::class, 'auth'])->name('login.auth');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//data siswa
Route::get('/data-siswa', [SiswaController::class, 'index'])->name('data.siswa');
Route::get('/data-siswa-create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/data-siswa-store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/data-siswa-edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/data-siswa-update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/data-siswa-delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');

//pelanggaran
Route::get('/pelanggaran-siswa', [PelanggaranController::class, 'index'])->name('pelanggaran.siswa');
Route::get('/pelanggaran-siswa-create', [PelanggaranController::class, 'create'])->name('pelanggaran.create');
Route::post('/pelanggaran-siswa-store', [PelanggaranController::class, 'store'])->name('pelanggaran.store');
Route::get('/pelanggaran-siswa/show/{id}', [PelanggaranController::class, 'show'])->name('pelanggaran.show');
Route::get('/pelanggaran-siswa-edit/{id}', [PelanggaranController::class, 'edit'])->name('pelanggaran.edit');
Route::put('/pelanggaran-siswa-update/{id}', [PelanggaranController::class, 'update'])->name('pelanggaran.update');
Route::delete('/pelanggaran-siswa-delete/{id}', [PelanggaranController::class, 'destroy'])->name('pelanggaran.delete');

//prestasi
Route::get('/prestasi-siswa', [PrestasiController::class, "index"])->name('prestasi.siswa');
Route::get('/prestasi-siswa-create', [PrestasiController::class, "create"])->name('prestasi.create');
Route::post('/prestasi-siswa-store', [PrestasiController::class, 'store'])->name('prestasi.store');
Route::get('/prestasi-siswa-show/{id}', [PrestasiController::class, 'show']);
Route::get('/prestasi-siswa-edit/{id}', [PrestasiController::class, 'edit'])->name('prestasi.edit');
Route::put('/prestasi-siswa-update/{id}', [PrestasiController::class, 'update'])->name('prestasi.update');
Route::delete('/prestasi-siswa-delete/{id}', [PrestasiController::class, "destroy"])->name('prestasi.delete');
Route::get('prestasi/getStudentsByRayon', [PrestasiController::class, 'getStudentsByRayon'])->name('prestasi.getStudentsByRayon');

//absensi
Route::get('/absensi-siswa', [AbsensiController::class, 'index'])->name('absensi.siswa');
Route::get('/absensi-siswa-create', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('/absensi-siswa-store', [AbsensiController::class, 'store'])->name('absensi.store');
Route::get('/absensi-siswa-show/{id}', [AbsensiController::class, "show"])->name('absensi.show');
Route::get('/absensi-siswa-edit/{id}', [AbsensiController::class, 'edit'])->name('absensi.edit');
Route::put('/absensi-siswa-update/{id}', [AbsensiController::class, 'update'])->name('absensi.update');
Route::delete('/absensi-siswa-delete/{id}', [AbsensiController::class, "destroy"])->name('absensi.delete');

//code pelanggaran
Route::get('/code-pelanggaran', [CodePelanggaranController::class, 'index'])->name('code.pelanggaran');
Route::get('/code-pelanggaran-create', [CodePelanggaranController::class, 'create'])->name('code.pelanggaran.create');
Route::post('/code-pelanggaran-store', [CodePelanggaranController::class, 'store'])->name('code.pelanggaran.store');
Route::delete('/code-pelanggaran-delete/{id}', [CodePelanggaranController::class, 'destroy'])->name('code.delete');

//rayon
Route::get('/index', [RayonController::class, 'index'])->name('rayon');
Route::get('/rayon-create', [RayonController::class, 'create'])->name('rayon.create');
Route::post('/rayon-store', [RayonController::class, 'store'])->name('rayon.store');
Route::delete('/rayon-delete/{id}', [RayonController::class, 'destroy'])->name('rayon.delete');

//data guru
Route::get('/data-guru', [GuruController::class, 'index'])->name('data.guru');
Route::get('/data-guru-create', [GuruController::class, 'create'])->name('guru.create');

//dashboard admin (ini klo pake yang dashboad2 menampilkan semua yang ada di dashboard2)
Route::get('/dashboard', [AdminController::class, "dashboard"]);

//ROLE SISWA
Route::get('/dashboard-siswa', [AdminController::class, "dashboardSiswa"]);
Route::get('/catatan', [AdminController::class, "catatan"]);

//pelanggaran itu catatan belom di ganti
Route::get('/view-pelanggaran', [AdminController::class, "detailPelanggaran"]);
Route::get('/prestasi', [AdminController::class, "prestasi"]);
