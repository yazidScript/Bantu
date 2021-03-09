
@extends('layouts.master')
@section('content')


<div class="container" style="margin-top:10rem;margin-bottom:10rem;">
   <div class="row">
     <div class="pembayaran-check mx-auto">
        <h1 style="font-size:25px">Silahkan Transfer ke</h1>

         <strong style="font-size:30px">{{$nama}} | {{$nomor}}</strong> <br>
				 <strong style="font-size:25px">A/N | Arif Dewangga </strong> <br>
				  <p>Sesuai Nominal Donasi Kamu <strong class="text-danger">Rp.{{number_format ($nominal)}}</strong></p>


            <a href="/" class="btn btn-danger mt-3" type="button" name="button">Selesai</a>

     </div>
   </div>
</div>


@stop
