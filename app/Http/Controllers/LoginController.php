<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect()->intended('/home')->with('success', 'Login Successfull');
        }

        return back()->withErrors([
            'email' => 'Email atau Password salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Anda Telah Log Out');
    }
}
