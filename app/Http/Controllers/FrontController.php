<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donasi;
use App\Donatur;
use App\MetodeBayar;
use App\Kecamatan;
class FrontController extends Controller
{
  public function home(Request $request)
  {
     // $req = $request->kec;
     $kec = Kecamatan::all();
     $donasi = Donasi::all();
     return view("Home.beranda",compact('donasi','kec'));
  }
   public function donasi(Request $request)
   {
    $donasi = Donasi::all();
     return view("Home.donasi",compact('donasi'));
   }
   public function Kecamatan($kec){
     $db = Donasi::where('kecamatan',$kec)->get();
     $kecamatan = Donasi::where('kecamatan',$kec)->get();
     $ada = "200";
     if(!$db->isEmpty()){
       return view('Home.kecamatan',compact('kecamatan','kec','ada'));
     }else{
       $ada = "204";
       return view('Home.kecamatan',compact('kecamatan','kec','ada'));
     }
   }

   public function tentang()
   {
     return view("Home.tentang");
   }
   public function detail(Request $request,$id)
   {
       $donasi = Donasi::paginate(6);
       $donasi = Donasi::find($id);
       return view('Home.detail',['donasi' => $donasi]);
   }

   public function donation(Request $request,$id)
   {
     $donasi = Donasi::find($id);
     $metodebayar = MetodeBayar::all();
      return view('Home.Donation',['donasi' => $donasi,'metodebayar'=> $metodebayar]);
   }

   public function donationcheck(Request $request)
   {
      $request->validate([
       'email' => 'required|email',
       'namalengkap' => 'required',
       'notlp' =>'required|min:12|max:13',
   ]);
   Donatur::insert([
       'donasi_id' =>$request->donasi_id,
       'email' => $request->email,
       'namalengkap'=>$request->namalengkap,
       'notlp'=>$request->notlp,
       'metodebayar' => $request->optionbayar
   ]);
   return redirect('/')->with('sukses','selamat anda sudah berdonasi , Terima Kasih');
 }
   public function bayar(Request $request)
   {
      $metodebayar = MetodeBayar::all();
      return view('Home.bayar',['metodebayar' => $metodebayar]);
   }

   public function notfoundkec()
   {
     return view('Home.notefound');
   }
}
