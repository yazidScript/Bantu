@extends('layouts.master')
@section('content')

<div class="container" style="margin-top:5rem;">
<div id="carouselExampleControls" class="carousel-slide" data-ride="carousel" style="">
 <div class="carousel-inner">
   <div class="carousel-item active">
     <img src="./Banner/Banner-slide.png" class="d-block w-100"  alt="...">
   </div>
   <div class="carousel-item">
     <img src="./Banner/Banner-slide.png" class="d-block w-100" alt="..." >
   </div>
   <div class="carousel-item">
     <img src="./Banner/Banner-slide.png" class="d-block w-100" alt="..." >
   </div>
 </div>
 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
 </a>
</div>
</div>
<div class="container mt-5 mb-5">
  <div class="donasi-judul" id="donasi">
      <h1 style="font-family: 'Roboto', sans-serif; font-size:30px;">Donasi</h1>
  </div>
  <div class="card-donasi" id="card-donasi">

    <div class="row">
        @foreach($donasi as $data)
        <div class="py-3 col-md-4">
          <div class="card" style="height: 100%;">
            <div class="donasi-img-wrapper">
              <img src="../images/{{ $data->gambar }}"class="card-img-top" style="height: 100%;" alt="..."/>
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{$data->judul}}</h5>
              <p class="card-text">
                {{$data->isi}}
              </p>
              <button class="card-btn"><a href="#" style="text-decoration:none;">Selengkapnya </a><span>&rarr;</span></button>
              <!-- <div class="mt-auto">
                <style media="screen">
                  a:hover{
                    text-decoration: none;
                    color:#E40B0B;
                  }
                </style>

              </div> -->
              <!-- <div class="progress">
             <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div> -->
            </div>

          </div>
        </div>
        @endforeach
    </div>
  </div>
<a href="/donasi" class="btn text-white" style="background-color:#3C3C55; text-transform: inherit; margin-bottom:20px;">Lebih Banyak</a>
</div>
@stop
