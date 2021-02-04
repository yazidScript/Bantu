<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donasi;

class DonasiController extends Controller
{
    public function index(Request $request)
    {
      $data_donasi = Donasi::all();
      return view('Admin.Donasi.index')->with(compact('data_donasi'));
    }
    public function create()
    {
        return view('Admin.Donasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi'   => 'required',
            'gambar' => 'required|mimes:jpeg,jpg,png'
          ]);
            $filename = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move('images', $filename);

          $data = Donasi::insert([
            'judul' =>$request->judul,
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
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
      Donasi::where('id',$id)->delete();
       return redirect('/dashboard/donasi')->with('sukses','Data Donasi Berhasil Dihapus');
    }
}
