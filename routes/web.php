<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

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

Route::view('/halaman-login','halaman-login');
Route::view('/halaman-dashboard','halaman-dashboard');
Route::view('/halaman-dashboard2','halaman-dashboard2');

//admin
// Route::view('/admin/catatan-siswa','catatan-siswa');
Route::get('/catatan-siswa', [adminController::class, "catatanSiswa"]);

Route::get('/add-code', [adminController::class, "addCode"]);
Route::get('/view-code', [adminController::class, "viewCode"]);

Route::get('/add-catatan', [adminController::class, "addCatatan"]);