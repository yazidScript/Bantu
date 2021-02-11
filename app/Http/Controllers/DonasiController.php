<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donasi;
use App\Kecamatan;
use DB,Hash;

class DonasiController extends Controller
{
    public function index(Request $request)
    {
      $data_donasi = Donasi::all();
      return view('Admin.Donasi.index')->with(compact('data_donasi'));
    }
    public function create(Request $request)
    {
        $kecamatan = Kecamatan::all();
        return view('Admin.Donasi.create',compact('kecamatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi'   => 'required',
            'gambar' => 'required|dimensions:width=600,height=400|mimes:jpeg,jpg,png'
          ]);
            $filename = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move('images', $filename);

          $data = Donasi::insert([
            'judul' =>$request->judul,
             'kecamatan' => $request->option,
            'isi' => $request->isi,
            'gambar' => $filename,
        ]);
        return redirect('/dashboard/donasi')->with('sukses','Data Donasi Berhasil Ditambahkan');
    }

    public function show($id)
    {
      $donasi = Donasi::find($id);
      return view ('Admin.Donasi.show',['donasi' => $donasi]);
    }


    public function edit($id)
    {
      $donasi = Donasi::find($id);
      $kecamatan = Kecamatan::all();
      return view('Admin.Donasi.edit',['donasi' => $donasi,'kecamatan'=> $kecamatan]);
    }


    public function update(Request $request, $id)
    {
      $kecamatan = Kecamatan::all();
      $new_image = $request->new_image;
      $old_image = $request->old_image;

   if(!isset($new_image)){
    DB::table('donasi')->where('id',$id)->update([
         'judul' => $request->judul,
         'kecamatan' => $request->option,
         'isi' => $request->isi,
         'gambar' => $old_image
        ]);
  }else{
    $filename = time() . '.' .$request->file('new_image')->getClientOriginalName();
    $request->file('new_image')->move('images', $filename);
    DB::table('donasi')->where('id',$id)->update([
         'judul' => $request->judul,
         'kecamatan' => $request->option,
         'isi' => $request->isi,
         'gambar' => $filename
        ]);
  }
  return redirect('/dashboard/donasi')->with('sukses','data berhasil di update');
    }

    public function destroy($id)
    {
      Donasi::where('id',$id)->delete();
       return redirect('/dashboard/donasi')->with('sukses','Data Donasi Berhasil Dihapus');
    }
}
