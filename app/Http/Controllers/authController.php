<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }
    public function showRegister(){
        return view('auth.register');
    }
    public function login(){
        
    }
    public function register(Request $request){
        $validated=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user=User::create($validated); //menyimpan ke database

        Auth::login($user); //autentikasi

        return redirect()->route('siswa.index');
    }
}
