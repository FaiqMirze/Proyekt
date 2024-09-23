<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function loginpost(Request $request)
    {
        // return view('admin.index');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.index');
        }
        return redirect()->route('admin.login')->withErrors('Email addres or password is incorret');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }


    public function showRegisterForm()
    {
        return view('admin.auth.register');
    }


     public function register(Request $request)
     {
         $request->validate([
             'name' => 'required',
             'email' => 'required|email|unique:admins',
             'password' => 'required|min:6',
         ]);
         Admin::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => encrypt($request->password),
         ]);
         return redirect()->route('admin.login')->with('success', 'you have ben registered succsessfully');
     }}

