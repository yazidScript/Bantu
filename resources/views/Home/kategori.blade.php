@extends('layouts.master')
@section('content')

<div class="container" style="margin-top:5rem;">
  <div class="kategori-title" id="kategori">
    <?php
    if($ada == "TRUE"){
     ?>
      <h1 class="text-center" style="font-family: 'Roboto', sans-serif; font-size:25px;">Berita Berdasarkan Kategori {{$kat}}</h1>
    <?php
  }elseif($ada == "FALSE"){
      ?>
      <div class="container mx-auto">
        <div class="alert alert-danger" style="margin-bottom:20rem; margin-top:10rem;"role="alert">
           Berita Berdasarkan Kategori {{$kat}} Masih <strong>Kosong.</strong>
       </div>
      </div>
      <?php
    }
    ?>


  </div>
  <div class="card-donasi" id="card-donasi">

    <div class="row">
        @foreach($kategori as $data)

        <div class="py-3 col-md-4">
          <div class="card" style="height: 100%;">
            <div class="post-img-wrapper">
              <img src="/images/{{ $data->thumbnail}}"class="card-img-top" style="height: 100%;" alt="..."/>
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{$data->title}}</h5>
              <p class="card-text">
                {{ \Illuminate\Support\Str::limit(strip_tags($data->content),150)}} <a href="/detail/post/{{$data->slug}}" class="text-danger">Read More</a>
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
