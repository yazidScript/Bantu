<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DonaturExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use App\Donatur;
use App\Pengajuan;
use App\Post;
use DB,Hash;

class AdminController extends Controller
{

  protected $receive_person = "";
  protected $pesan = [];

    public function dashboard()
    {
      $count = Donatur::count();
      // $count_donasi = Donasi::count();
      return view('Admin.dashboard')->with('count', $count);
    }

    public function donatur(Request $request)
    {
      $donatur = Donatur::all();
      return view('Admin.Donatur.index',compact('donatur'));
    }
    public function export()
    {
        return Excel::download(new DonaturExport, 'donatur.xlsx');
    }

   public function deletedonatur($id)
   {
     Donatur::where('id',$id)->delete();
     return redirect('/dashboard/donatur')->with('sukses','Data Donatur Berhasil Dihapus');
   }

   public function pengajuan(Request $request)
   {
    $pengajuan = Pengajuan::all();
     return view('Admin.pengajuan',compact('pengajuan'));
   }

   public function deletepengajuan($id)
   {
     Pengajuan::where('id',$id)->delete();
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
        $donation->to($this->receive_person)->subject('Verifikasi Donatur');
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
