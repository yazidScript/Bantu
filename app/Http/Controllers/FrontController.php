<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donatur;
use App\MetodeBayar;
use App\Kecamatan;
use App\Pengajuan;
use App\Kategory;
use App\Post;
use PDF;
use Str;
use DB,Hash;
use Carbon\Carbon;

class FrontController extends Controller
{
  public function beranda(Request $request)
  {
     // $req = $request->kec;
     $kec = Kecamatan::all();
     $posts = Post::latest()->take(3)->get();
     return view("Home.beranda",compact('kec','posts'));
  }

   public function berita(Request $request)
   {
     $kat = Kategory::all();
     $post = Post::latest()->get();
     return view("Home.berita",compact('kat','post'));
   }
   public function kategori($kat)
   {
     $db = Post::where('kategori',$kat)->get();
     $kategori = Post::where('kategori',$kat)->get();
     $ada = "TRUE";
     if (!$db->isEmpty()) {
        return view('Home.kategori',compact('kategori','kat','ada'));
     }else {
       $ada = "FALSE";
       return view('Home.kategori',compact('kategori','kat','ada'));
     }
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
 $filename = time() . '.' . $request->file('gambar_ktp')->getClientOriginalExtension();
 $request->file('gambar_ktp')->move('images-pengajuan', $filename);

     Pengajuan::insert([
     'email' => $request->email,
     'namalengkap' => $request->namalengkap,
     'notlp'=>$request->notlp,
     'tanggal'=>$request->tanggal,
     'alamat' => $request->alamat,
     'gambar_ktp' => $filename,
     'created_at' => Carbon::now()->toDateTimeString()
 ]);
 return redirect('/tentang')->with(['success' => 'Pengajuan Berhasil DiKirim']);
}
   public function donation(Request $request,$id)
   {
     $post = Post::findOrFail($id);
     $metodebayar = MetodeBayar::all();
     return view('Home.Donation',['post' => $post,'metodebayar'=> $metodebayar]);
   }

   public function donationcheck(Request $request)
   {
      $request->validate([
       'email' => 'required|email',
       'namalengkap' => 'required',
       'notlp' =>'required|min:12|max:13',
       'nominal' => 'required',
       'gambar_ktp' => 'required'
   ]);
   $filename = time() . '.' . $request->file('gambar_ktp')->getClientOriginalExtension();
   $request->file('gambar_ktp')->move('images-donatur', $filename);
   Donatur::insert([
       'post_id' =>$request->post_id,
       'email' => $request->email,
       'namalengkap'=>$request->namalengkap,
       'notlp'=>$request->notlp,
       'nominal' => $request->nominal,
       'metodebayar' => $request->optionbayar,
       'status' => 'Belum diterima',
       'gambar_ktp' => $filename,
       'created_at' => Carbon::now()->toDateTimeString()
   ]);
   $jumlah = DB::table('posts')->where('id',$request->post_id)->first();
   $sum_data = $jumlah->jumlah_sekarang + $request->nominal;
   $db_donatur = DB::table('posts')->where('id',$request->post_id)->update([
     'jumlah_sekarang' => $sum_data
   ]);
    $nmnl = $request->nominal;
    $mtd_byr = $request->optionbayar;
    $db_mtd = MetodeBayar::select('nama','nomor')->where('nama',$mtd_byr)->get();
    foreach ($db_mtd as $e) {
      $v = $e->nama;
      $vv = $e->nomor;
    }


    $total_donatur = DB::table('posts')->where('id', request('post_id'))->first();

    if($total_donatur){
      $jml_donate = $total_donatur->total_donatur += 1;
      DB::table('posts')->where('id', request('post_id'))->update([
        'total_donatur' => $jml_donate
      ]);
    }

    return view('Home.bayar-check',['nama' => $v,'nomor' => $vv,'nominal' => $nmnl])->with(['success' => 'Donasi Berhasil Di Kirim']);
   }


   public function carabayar(Request $request)
   {
      $metodebayar = MetodeBayar::all();
      return view('Home.cara-bayar',['metodebayar' => $metodebayar]);
   }

   public function bayarcheck()
   {
     return view('Home.bayar-check');
   }

   public function detailpost($slug)
   {
     $data_post = Post::get();
     $feed_post = [];
     $post = Post::where('slug',  $slug)->first();

     foreach ($data_post as $key => $item) {
       if(Str::lower($slug) !== $item->slug){
         $feed_post[] = $item;
       }
     }

     return view('Home.show', compact('feed_post','post'));
   }

 public function ExportPDF()
 {
   $pdf = PDF::loadview('Home/cara-bayar');
   return $pdf->download('cara-bayar.pdf');
 }

   public function notfoundkec()
   {
     return view('Home.notefound');
   }

}
