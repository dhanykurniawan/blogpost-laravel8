<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'judul' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all(); // menangkap dan menampilkan semua isian form

        $validatedData = $request->validate([
            'name' => 'required|max:255', // bisa menggunakan |
            'username' => ['required', 'min:3', 'max:255', 'unique:users'], // bisa menggunakan arraya
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // untuk encrypt password sebelum menyimpan kedalam database
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd("registrasi berhasil!");
        User::create($validatedData);

        // $request->session()->flash('sukses', 'Registration successfull! Please login');
        return redirect('/login')->with('sukses', 'Registration successfull! Please login');
    }
}
