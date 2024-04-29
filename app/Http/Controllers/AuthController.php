<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth(){
        return view('halaman-login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'nama' => $request->nama,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect('/dashboard');
            } elseif ($user->role === 'siswa') {
                return redirect('/dashboard');
            }   
        } else {
            return redirect()->route('siswa')->with('failed', 'nama atau password salah');
        }
    }
    

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('message', 'You have been logged out.');
    }
}
