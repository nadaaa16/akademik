<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function tambahUser(){
        return view('user.form');
    }

    public function simpanUser(Request $request){
        $request->validate([
            'nama' => 'required',
            'role' => 'required', // Sesuaikan validasi dengan nama kolom yang benar
            'password' => 'required' 
        ]);

        $data = $request->only('nama', 'role', 'password');
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.form', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'role' => 'required', // Sesuaikan validasi dengan nama kolom yang benar
            'password' => 'nullable' 
        ]);
    
        $data = $request->only('nama', 'role'); // Hilangkan spasi ekstra di sini
    
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->input('password'));
        }
    
        $user = User::findOrFail($id);
        $user->update($data);
    
        return redirect()->route('user')->with('success', 'Data user berhasil diperbarui.');
    }
    
    public function hapus($id)
    {
        User::find($id)->delete();
        return redirect()->route('user');
    }
}
