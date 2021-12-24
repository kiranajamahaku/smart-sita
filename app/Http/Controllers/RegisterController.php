<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request) 
    {
        $validateData = $request->validate([
            'username' => 'required|unique:users',
            'fullname' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required',
            'statusMhs' => 'required',
            'tahunAkad' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'phone' => 'required',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);

        $request->session()->flash('success', 'Registration successful. Please login.');
        return redirect('/login');
    }
}