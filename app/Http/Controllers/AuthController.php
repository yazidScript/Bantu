<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Str;
use Hash;
use Session;
use App\User;

class AuthController extends Controller
{
    public function login()
    {
      return view('Admin.login');
    }
    public function postlogin(Request $request)
    {
      $email = Str::lower(request('email'));
      $password = request('password');

      $admin = User::where('email', $email)->first();

      if(!is_null($admin)){

        Session::put('admin', $admin->name);

        return view('Admin.dashboard', compact('admin'))->with('suksess','Login Admin Berhasil');
      }
      // if (Auth::attempt(['email' => $email, 'password' => $password])) {
      // }
      return redirect('/login');
    }

    public function logout()
    {
      Session::forget('admin');
      // Auth::logout();
      return redirect('/login');
    }
}
