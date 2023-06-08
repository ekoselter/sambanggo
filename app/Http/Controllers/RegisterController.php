<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' =>'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // enkripsi password
            // pakai ini bisa atau
                // $validatedData['password'] = bcrypt($validatedData['password']);
            // pakai ini
                $validatedData['password'] = Hash::make($validatedData['password']);

        // dd('registrasi berhasil');
        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successful! Please login');
        return redirect('/login')->with('success', 'Registration successful! Please login');

    }
}
