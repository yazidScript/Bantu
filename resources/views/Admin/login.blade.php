@extends('layouts.master')

@section('content')
<div class="container mt-8">
<div class="row justify-content-center">
   <div class="col-md-6 mb-5">
       <div class="card">
           <div class="card-header bg-danger text-white text-left text-weight-bold">Login </div>

           <div class="card-body">
               <form method="POST" action="{{ action('AuthController@postlogin') }}">
                   {{csrf_field()}}
                   <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
                       <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                       <div class="col-md-6">
                       <input name="email" type="text" class="form-control" id="email" placeholder="" autocomplete="off">
                       </div>

                   </div>
                   <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                       <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                       <div class="col-md-6">
                       <input name="password" type="password" class="form-control" id="password" placeholder="">
                       </div>

                   </div>
                   <div class="text-center">
                       <button class="btn btn-danger col-md-8 mx-auto btn-block my-4" type="submit">Login</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>
</div>
@endsection
