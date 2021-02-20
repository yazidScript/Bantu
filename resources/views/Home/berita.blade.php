@extends('layouts.master')
@section('content')

<div class="container" style="margin-top:5rem;">
<div id="carouselExampleControls" class="carousel-slide" data-ride="carousel" style="">
 <div class="carousel-inner">
   <div class="carousel-item active">
     <img src="./Banner/Banner-1.png" class="d-block w-100"  alt="...">
   </div>
   <div class="carousel-item">
     <img src="./Banner/Banner-2.png" class="d-block w-100" alt="..." >
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
      <h1 style="font-family: 'Roboto', sans-serif; font-size:30px;">Berita</h1>
  </div>
  <div class="card-donasi" id="card-donasi">

    <div class="row">
      @foreach($post as $data)
      <div class="py-3 col-md-4">
        <div class="card" style="height: 100%;">
          <div class="donasi-img-wrapper">
            <img src="../images/{{$data->thumbnail()}}"class="card-img-top" style="height: 100%;" alt="..."/>
          </div>
          <div class="card-body d-flex flex-column">
            <p class="card-kategory small text-primary">{{$data->kategori}}</p>
            <h5 class="card-title">{{$data->title}}</h5>
            <p class="card-text">
              {!! $data->content!!} <a href="{{Route('detail.post',$data->slug)}}" class="text-danger">Read More</a>
            </p>
            <button class="card-btn"><a href="/donation/{{$data->id}}/donation-check" style="text-decoration:none;">Donasi Sekarang </a><span>&rarr;</span></button>
          </div>

        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@stop
