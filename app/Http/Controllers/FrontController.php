<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donasi;
class FrontController extends Controller
{
  public function home(Request $request)
  {
     $donasi = Donasi::all();
     return view("Home.beranda",compact('donasi'));
  }
   public function donasi(Request $request)
   {
    $donasi = Donasi::all();
     return view("Home.donasi",compact('donasi'));
   }

   public function tentang()
   {
     return view("Home.tentang");
   }
}
