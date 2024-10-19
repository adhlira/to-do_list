<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignUpController extends Controller
{
    public function signUpPage()
    {
        return view('sign_up');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:32',
        ]);

        // Simpan data ke database
        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = $validatedData['password'];
        $user->save();

        // Redirect dengan pesan sukses
        return redirect('/')->with('success', 'Data berhasil disimpan!');
    }
}
