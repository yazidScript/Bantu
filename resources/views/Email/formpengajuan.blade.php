@extends('layouts.masteradmin')
@section('content')

<div class="container-fluid">
<div class="row justify-content-center">
   <div class="col-md-8">
       <div class="card mt-3">
           <div class="card-header bg-primary text-white text-left ">Kirim Email</div>

           <div class="card-body">
             <form method="POST" action="{{Route('send.pengajuan')}}" enctype="multipart/form-data">
                 {{csrf_field()}}
                 <div class="form-group row">
                     <label for="nama" class="col-md-4 col-form-label text-md-right" id="title">Nama</label>
                     <div class="col-md-6">
                     <input name="nama" type="text" class="form-control" id="nama" value="{{ old('nama') }}">
                     </div>
                     <span style="color:red; margin-left: 240px">{{ $errors->first('nama') }}</span>
                 </div>
                 <div class="form-group row">
                     <label for="nama" class="col-md-4 col-form-label text-md-right" id="title">Email</label>
                     <div class="col-md-6">
                     <input name="email" type="text" class="form-control" id="email" value="{{ old('email') }}">
                     </div>
                     <span style="color:red; margin-left: 240px">{{ $errors->first('email') }}</span>
                 </div>
                 <div class="form-group">
                        <label>Isi Email</label>
                        <textarea name="email_body" class="form-control" rows="3" id="email_body"></textarea>
                      </div>
                 <div class="text-center">
                         <button class="btn btn-primary btn-block my-4 mx-auto col-md-10" type="submit">Kirim</button>
                 </div>
             </form>
           </div>
       </div>
   </div>
</div>
</div>
@stop
@section('footer')
<script>
    CKEDITOR.replace( 'email_body');
</script>
@stop
