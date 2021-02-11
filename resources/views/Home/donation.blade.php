@extends('layouts.master')
@section('content')

<div class="container">
<div class="container my-5" id="donation-id">
<div class="row justify-content-center">
   <div class="col-md-8 mt-5">
       <div class="card">
           <div class="card-header bg-danger text-white text-left">Donasi</div>

           <div class="card-body">
               <form method="POST" action="/" enctype="multipart/form-data">

                   <input name="" type="hidden" class="form-control" value="">
                   <div class="form-group row">
                       <label for="email" class="col-md-4 col-form-label text-md-right" id="email">Email</label>
                       <div class="col-md-6">
                       <input name="email" type="text" class="form-control" id="signin-email" value="{{ old('email') }}" autocomplete="off">
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('email') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="telephone" class="col-md-4 col-form-label text-md-right">No Telephone</label>
                       <div class="col-md-6">
                       <input name="telephone" type="number" class="form-control" id="signin-telephone" value="{{ old('telephone') }}" autocomplete="off">
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('telephone') }}</span>
                   </div>
                   <div class="form-group row">
                       <label for="nama_pemesan" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                       <div class="col-md-6">
                       <input name="nama_pemesan" type="text" class="form-control" id="nama_pemesan" value="{{ old('nama') }}" autocomplete="off">
                       </div>
                       <span style="color:red; margin-left: 240px">{{ $errors->first('nama') }}</span>
                   </div>
                   <div class="text-center">
                             <a href="/donation-check/pembayaran" class="btn text-white" style="background-color:#E40B0B; text-transform:inherit; width:200px;">Lanjut Pembayaran</a>
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>
</div>

</div>

@stop
