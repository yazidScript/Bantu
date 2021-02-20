<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donatur;
use App\MetodeBayar;
use App\Kecamatan;
use App\Pengajuan;
use App\Post;
use DB,Hash;

class FrontController extends Controller
{
  public function beranda(Request $request)
  {
     // $req = $request->kec;
     $kec = Kecamatan::all();
     $posts = Post::all();
     return view("Home.beranda",compact('kec','posts'));
  }
   public function berita(Request $request)
   {
     $post = Post::all();
     return view("Home.berita",compact('post'));
   }
   public function Kecamatan($kec){
     $db = Donasi::where('kecamatan',$kec)->get();
     $kecamatan = Donasi::where('kecamatan',$kec)->get();
     $ada = "TRUE";
     if(!$db->isEmpty()){
       return view('Home.kecamatan',compact('kecamatan','kec','ada'));
     }else{
       $ada = "FALSE";
       return view('Home.kecamatan',compact('kecamatan','kec','ada'));
     }
   }

   public function tentang()
   {
     return view("Home.tentang");
   }

  public function pengajuan(Request $request)
  {

    $request->validate([
     'email' => 'required|email',
     'namalengkap' => 'required',
     'notlp' =>'required|min:12|max:13',
     'tanggal' => 'required',
     'alamat' => 'required'
 ]);
     Pengajuan::insert([
     'email' => $request->email,
     'namalengkap' => $request->namalengkap,
     'notlp'=>$request->notlp,
     'tanggal'=>$request->tanggal,
     'alamat' => $request->alamat,
 ]);
 return redirect('/tentang')->with('sukses','selamat pengajuan anda berhasil , Tunggu Konfirmasi dari Admin');
  }
   public function donation(Request $request,$id)
   {
     $post = Post::find($id);
     $metodebayar = MetodeBayar::all();
     return view('Home.Donation',['post' => $post,'metodebayar'=> $metodebayar]);
   }

   public function donationcheck(Request $request)
   {
      $request->validate([
       'email' => 'required|email',
       'namalengkap' => 'required',
       'notlp' =>'required|min:12|max:13',
       'nominal' => 'required'
   ]);
   Donatur::insert([
       'post_id' =>$request->post_id,
       'email' => $request->email,
       'namalengkap'=>$request->namalengkap,
       'notlp'=>$request->notlp,
       'nominal' => $request->nominal,
       'metodebayar' => $request->optionbayar,
       'status' => 'Belum diterima'
   ]);
   return redirect('/')->with('sukses','selamat anda sudah berdonasi , Terima Kasih');
 }
   public function bayar(Request $request)
   {
      $metodebayar = MetodeBayar::all();
      return view('Home.bayar',['metodebayar' => $metodebayar]);
   }

   public function detailpost(Request $request ,$slug)
   {
     $post = new Post;
     $post = Post::where('slug' , '=' , $slug)->first();
     return view('Home.show',['post' => $post]);
   }


   public function notfoundkec()
   {
     return view('Home.notefound');
   }

}
