<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('halaman-login');
    }

    public function auth(Request $request){
        $request->validate([
            'nama' => 'required',
            'password' => 'required',
        ], [
            // 'nama.exists' => 'nama ini belum tersedia',
            'nama' => 'nama harus diisi',
            'password' => 'nis harus diisi'
        ]);

        return redirect('/dashboard');

        // $user = $request->only('nama','password');
        // if(Auth::attempt($user)){
        //     if(Auth::user()->role == 'siswa'){
        //         return redirect('/dashboard-siswa')->with('successLogin', 'Anda berhasil login!!!');
        //     } else if (Auth::user()->role == 'guru'){
        //         return redirect('/dashboard');
                
        //     }
        }
    

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    // public function register(){
    //     return view('component.registrasi');
    // }
    }