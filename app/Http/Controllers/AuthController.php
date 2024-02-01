<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
       
        $credentials = $request ->validate([
                // dd($request->all());
            'username' => ['required'],
            'password' => ['required'],
        ]); 
        return redirect ('/');
}

public function register() {

    return view('auth.register');
}

public function regis(Request $request) {
      //validated data masuk atau tidak
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:5',
            'phone' => 'required|max:13',
            'address' => 'required|max:255',
        ]);
        
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Regist Success! wait admin to approve');
        return redirect('login');
}
    

}
