<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginpost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect('admin/dashboard')->with('success', 'Login admin berhasil');
        }
        return redirect('/')->with('error', 'Email atau password tidak sesuai.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}
