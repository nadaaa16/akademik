<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\SiswaController;
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

Route::get('landing', function () {
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
Route::get('/pelanggaran-siswa', [adminController::class, "pelanggaranSiswa"]);
Route::get('/add-pelanggaran', [adminController::class, "addPelanggaran"]);
Route::get('/detail-pelanggaran', [adminController::class, "detailPelanggaran"]);
// Route::view('/catatan-siswa','catatan-siswa');
Route::get('/code', [CodePelanggaranController::class, "code"]);
Route::post('/add-code', [CodePelanggaranController::class, "storeCodePelanggaran"])->name('pelanggaran.store');
Route::get('/view-code', [adminController::class, "viewCode"])->name('view-code');
Route::get('/code/{id}/delete', [CodePelanggaranController::class, "delete"])->name('delete-code');
Route::delete('/code/{id}', [CodePelanggaranController::class, "confirmDelete"])->name('confirm-delete-code');

Route::get('/prestasi-siswa', [adminController::class, "prestasiSiswa"]);
Route::get('/add-prestasi', [adminController::class, "addPrestasiSiswa"]);

Route::get('/data-siswa', [adminController::class, "dataSiswa"]);
Route::get('/add-siswa', [adminController::class, "addSiswa"]);
Route::get('/data-guru', [adminController::class, "dataGuru"]);
Route::get('/add-guru', [adminController::class, "addGuru"]);
//dashboard admin (ini klo pake yang dashboad2 menampilkan semua yang ada di dashboad2)
Route::get('/dashboard', [adminController::class, "dashboard"]);
Route::get('/absensi', [adminController::class, "absensi"]);
Route::get('/add-absensi', [adminController::class, "addAbsensi"]);

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