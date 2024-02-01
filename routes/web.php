<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
Route::post('/register', [AuthController::class, 'regis'])->name('register');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login-proses', [AuthController::class, 'login_proses'])->name('login-proses');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::view('/halaman-login','halaman-login');
Route::view('/halaman-dashboard','halaman-dashboard');
Route::view('/halaman-dashboard2','halaman-dashboard2');

//admin
Route::view('/catatan-siswa','catatan-siswa');
