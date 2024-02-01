<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'regis']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login-proses', [AuthController::class, 'login_proses'])->name('login-proses');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::view('/halaman-login','halaman-login');
Route::view('/halaman-dashboard','halaman-dashboard');
Route::view('/halaman-dashboard2','halaman-dashboard2');


//admin
Route::get('/catatan-siswa', [adminController::class, "catatanSiswa"]);
Route::get('/add-catatan', [adminController::class, "addCatatan"]);
Route::get('/code', [CodePelanggaranController::class, "code"]);
Route::post('/add-code', [CodePelanggaranController::class, "storeCodePelanggaran"]);
Route::get('/view-code', [adminController::class, "viewCode"]);
Route::get('/prestasi-siswa', [adminController::class, "prestasiSiswa"]);
Route::get('/add-prestasi', [adminController::class, "addPrestasiSiswa"]);
Route::get('/data-siswa', [adminController::class, "dataSiswa"]);
Route::get('/add-siswa', [adminController::class, "addSiswa"]);
Route::get('/data-guru', [adminController::class, "dataGuru"]);
Route::get('/add-guru', [adminController::class, "addGuru"]);
//dashboard admin (ini klo pake yang dashboad2 menampilkan semua yang ada di dashboad2)
Route::get('/dashboard', [adminController::class, "dashboard"]);
