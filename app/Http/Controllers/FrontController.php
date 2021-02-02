<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function donasi()
   {
     return view("Home.donasi");
   }

   public function tentang()
   {
     return view("Home.tentang");
   }
}
