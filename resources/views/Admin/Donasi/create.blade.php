@extends('layouts.masteradmin')
@section('content')

<div class="container ">
<div class="row justify-content-center m-auto">
   <div class="col-md-8">
       <div class="card mt-3">
           <div class="card-header bg-primary text-white text-left">Donasi | Berita</div>

           <div class="card-body">
               <form method="POST" action="/dashboard/donasi" enctype="multipart/form-data">
                   {{csrf_field()}}
                   <div class="form-group row">
                       <label for="judul" class="col-md-4 col-form-label text-md-right" id="nama">Judul</label>
                       <div class="col-md-6">
                       <input name="judul" type="text" class="form-control" id="judul" value="{{ old('judul') }}">
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('judul') }}</span>
                   </div>
                   <div class="form-group row">
                     <label for="kecamatan" class="col-md-4 text-md-right">Kecamatan</label>
                     <select class="form-control col-md-6" id="kecamatan" name="option">
                       @foreach($kecamatan as $item)
                            <option value="{{$item->nama}}"> {{$item->nama}} </option>
                           @endforeach
                     </select>
                   </div>
                   <div class="form-group row">
                       <label for="isi" class="col-md-4 col-form-label text-md-right">Isi Berita | Donasi</label>
                       <div class="col-md-6">
                       <textarea name="isi" type="text" class="form-control" id="isi" value="{{ old('isi') }}" ></textarea>
                       </div>

                       <span style="color:red; margin-left: 240px">{{ $errors->first('email') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="gambar" class="col-md-4 col-form-label text-md-right">Gambar</label>
                       <div class="col-md-6">
                       <input name="gambar" type="file" class="form-control" value="{{ old('gambar') }}" id="gambar">
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('gambar') }}</span>
                   </div>
                   <div class="text-center">
                           <button class="btn btn-primary btn-block my-4 mx-auto col-md-10" type="submit">Tambah</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>
</div>
@stop
