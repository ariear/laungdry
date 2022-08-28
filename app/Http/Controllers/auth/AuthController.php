<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        $systemimage = System::find(1);

        return view('auth.login');
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'email' => 'required',
            'password' => 'required|min:3'
        ]);

        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')->with('success','Anda berhasil login !!');
        }

        return back()->with('error','email/password salah');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/auth/login');
    }
}
