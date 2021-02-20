<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AuthController extends Controller
{
    public function login()
    {
      return view('Admin.login');
    }
    public function postlogin(Request $request)
    {
      $email = 'admin@gmail.com';
      $password = 'admin321';
      if (Auth::attempt(['email' => $email, 'password' => $password])) {
          return redirect('/dashboard')->with('suksess','Login Admin Berhasil');
      }
      return redirect('/dashboard');
    }

    public function logout()
    {
      Auth::logout();
      return redirect('/login');
    }
}
