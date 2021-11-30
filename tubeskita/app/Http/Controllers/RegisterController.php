<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register.register', [
            'title' => 'Daftar'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:8|max:255|unique:users',
            'email' => 'required|string|email:dns|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed|unique:users',
            'telp' => 'required|numeric|min:12|max:13',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'telp' => $request->telp,
        ]);
    }

}
