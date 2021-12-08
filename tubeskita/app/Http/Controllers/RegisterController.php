<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
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
            'name' => 'required|max:255',
            'role_id' => 'required',
            'email' => 'required|email:dns',
            'username' => 'required|min:8|unique:users',
            'telp' => 'required|min:12',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $validated['password'] = bcrypt($validated['password']);
        
        User::create($validated);
        $request->session()->flash('success', 'Registrasi berhasil ! Silahkan masuk');   
        return redirect('/login');
        // dd($validated);
        // echo 'Hello';
        // dd(request()->all());
    }

}
