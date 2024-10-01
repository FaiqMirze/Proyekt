<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
             'password' => Hash::make($request->password),
         ]);
         return redirect()->route('admin.login')->with('success', 'you have ben registered succsessfully');
     }
         public function showForgotForm ()
         {
             return view('admin.auth.forgotpassword');

}
         public function changePassword(Request $request)
     {
          $request->validate([
              'email'=>'required',
              'new_password'=>'required',
          ]);
            $admin=Admin::where('email',$request->email) ->first() ;
            $admin->password=Hash::make($request->new_password);
            $admin->save();
            return redirect()->route('admin.login')->with('success', 'Password deyisdi');
     }

     }

