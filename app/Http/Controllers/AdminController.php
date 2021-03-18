<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DonaturExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use App\Donatur;
use App\Pengajuan;
use App\Post;
use Session;
use DB,Hash;
use Carbon\Carbon;

class AdminController extends Controller
{

  protected $receive_person = "";
  protected $pesan = [];

  public function check_logged(){
    if(!Session::has('admin')){
      return true;
    }
  }

    public function dashboard()
    {
      $jumlah_sekarang = Post::all();
      if(!Session::has('admin')){
        return back();
      }else{

        $donatur = Donatur::get();
        $total_saldo = 0;

        foreach ($donatur as $key => $saldo) {
          $total_saldo += $saldo->nominal;
        }

        return view('admin.dashboard', compact('total_saldo'));

      }

    }

    public function donatur(Request $request)
    {
      if(Self::check_logged()){
        return redirect()->back();
      }

      if ($request->has('cari')) {
         $donatur = Donatur::where('namalengkap','LIKE','%' .$request->cari. '%')->get();
      }else {
          $donatur = Donatur::latest()->get();
      }

      return view('Admin.Donatur.index',compact('donatur'));
    }
    public function export()
    {
        return Excel::download(new DonaturExport, 'donatur.xlsx');
    }

   public function deletedonatur($id)
   {
     if(Self::check_logged()){
       return redirect()->back();
     }
     $get_data_donatur = DB::table('donatur')->where('id', $id)->first();
     $get_foto_donatur = $get_data_donatur->gambar_ktp;

     $path_delete = public_path('/images-donatur');
     if ($get_data_donatur) {
       File::delete($path_delete.'/'.$get_foto_donatur);
       Donatur::where('id',$id)->delete();
     }
     return redirect('/dashboard/donatur')->with('sukses','Data Donatur Berhasil Dihapus');
   }

   public function pengajuan(Request $request)
   {
     if(Self::check_logged()){
       return redirect()->back();
     }

    $pengajuan = Pengajuan::latest()->get();
     return view('Admin.pengajuan',compact('pengajuan'));
   }

   public function deletepengajuan($id)
   {
     if(Self::check_logged()){
       return redirect()->back();
     }
     $get_data = DB::table('pengajuan')->where('id', $id)->first();
     $get_foto = $get_data->gambar_ktp;

     $path_delete = public_path('/images-pengajuan');
     if ($get_data) {
       File::delete($path_delete.'/'.$get_foto);
       Pengajuan::where('id',$id)->delete();
     }

     return redirect('/dashboard/pengajuan')->with('sukses','Data Pengajuan Berhasil Dihapus');
   }

   //send email verifikasi donatur
   public function sendemail($id)
   {

    $receiver = Donatur::where('id', $id)->get();
    $receiver2 = Donatur::find($id);
    DB::table('donatur')
    ->where('id', $id)
    ->update(['status' => "Di terima"]);
    $posts = Post::where('id',$receiver[0]->post_id)->get();

    foreach ($receiver as $rec) {
      $this->receive_person = $rec->email;
    }

    $donation = $receiver;
    try{
      Mail::send('Email.donation', array('donation' => $donation, 'posts' => $posts) , function($donation) use($id){
        $donation->to($this->receive_person)->subject('Terima Donasi');
        $donation->from(env('MAIL_USERNAME','teamskudusbisa.kds@gmail.com'),'Kudus Bisa');
      });

    }catch (Exception $e){
      return response (['status' => false,'errors' => $e->getMessage()]);
    }
    return back()->with('sukses','sukses mengirim email terima donatur');
   }

   public function pengajuanemail()
   {
     return view('Email.formpengajuan');
   }
/// Pengajuan Send Emnail
      public function pengajuansend(Request $request)
      {
        if(Self::check_logged()){
          return redirect()->back();
        }

        /// Siapkan Data
         $email = $request->email;
         $data =  array(
           'nama' => $request->nama,
           'email_body' => $request->email_body
         );

         // Kirim Email
         Mail::send('Email.email_templeate_pengajuan', $data, function($mail) use ($email) {
           $mail->to($email, 'no-reply')
                ->subject('TEAMS KUDUS BISA');
                $mail->from('teamskudusbisa.kds@gmail.com','Konfirmasi Pengajuan');
         });

         // Cek gagal
         if (Mail::failures()) {
             return redirect('/dashboard/pengajuan')->with('alert', 'Gagal Mengirim Email');
         }
        return redirect('/dashboard/pengajuan')->with('sukses','sukses mengirim email');
      }


    public function statusditerima(Request $request)
    {
      $donatur = Donatur::where('status','diterima')->get();
      return view('admin.status',compact('donatur'));
    }

   }
