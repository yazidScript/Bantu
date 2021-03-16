@extends('layouts.master')
@section('content')

<div class="container">
<div class="container my-5" id="donation-id">
<div class="row justify-content-center">
   <div class="col-md-8 mb-5">
      <div class="card-header bg-info text-white text-left mb-2 br-3">Cara pembayaran, bisa dilihat di <a href="/cara-bayar" style="text-decoration:none;" class="text-white">SINI <span>&rarr;</span> </a></div>
       <div class="card">
           <div class="card-header bg-danger text-white text-left">Donasi</div>

           <div class="card-body">
               <form method="POST" action="/donation-check" enctype="multipart/form-data">
                    {{csrf_field()}}
                   <input name="post_id" type="hidden" class="form-control" value="{{ $post->id }}">
                   <input name="" type="hidden" class="form-control" value="">
                   <div class="form-group row">
                       <label for="namalengkap" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                       <div class="col-md-6">
                       <input name="namalengkap" type="text" class="form-control" id="namalengkap" value="{{ old('namalengkap') }}" autocomplete="off">
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('namalengkap') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="notlp" class="col-md-4 col-form-label text-md-right">No Telephone / WA</label>
                       <div class="col-md-6">
                       <input name="notlp" type="number" class="form-control" id="notlp" value="{{ old('notlp') }}" autocomplete="off">
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('notlp') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="email" class="col-md-4 col-form-label text-md-right" id="email">Email</label>
                       <div class="col-md-6">
                       <input name="email" type="text" class="form-control" id="signin-email" value="{{ old('email') }}" autocomplete="off">
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('email') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="nominal" class="col-md-4 col-form-label text-md-right">Nominal</label>
                       <div class="col-md-6">
                       <input name="nominal" type="number" class="form-control" id="nominal" value="{{ old('nominal') }}" autocomplete="off" placeholder="Rp.">
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('nominal') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="metodebayar" class="col-md-4 col-form-label text-md-right">Metode Pembayaran</label>
                       <div class="col-md-6">
                         <select class="form-control col-md-12" id="metodebayar" name="optionbayar">
                           @foreach($metodebayar as $item)
                                <option value="{{$item->nama}}"> {{$item->nama}} </option>
                               @endforeach
                         </select>
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('metodebayar') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="gambar_ktp" class="col-md-4 col-form-label text-md-right">Foto KTP</label>
                       <div class="col-md-6">
                       <input name="gambar_ktp" type="file" class="form-control" value="{{ old('gambar_ktp') }}" id="gambar_ktp" required>
                       <span  style="color:red;">{{ $errors->first('gambar_ktp') }}</span>
                     </div>
                   </div>
                   <div class="text-center" >
                     <button class="btn btn-danger text-white" style="text-transform:inherit; width:200px;">Donasi</button>

                   </div>
               </form>
           </div>
       </div>
   </div>
</div>
</div>

</div>

@stop
