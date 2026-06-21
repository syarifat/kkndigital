<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        // Jika sudah login, redirect ke admin
        if (session('admin_logged_in')) {
            return redirect()->route('admin.orders');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $validUsername = env('ADMIN_USERNAME', 'admin');
        $validPassword = env('ADMIN_PASSWORD', 'password');

        if ($request->username === $validUsername && $request->password === $validPassword) {
            $request->session()->put('admin_logged_in', true);
            $request->session()->put('admin_username', $request->username);
            return redirect()->route('admin.orders')->with('success', 'Selamat datang, ' . $request->username . '!');
        }

        return back()->withErrors(['login' => 'Username atau password salah.'])->withInput(['username' => $request->username]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['admin_logged_in', 'admin_username']);
        return redirect()->route('admin.login')->with('success', 'Berhasil keluar.');
    }
}
