@extends('layouts.master')
@section('content')

<div class="container" style="margin-top:5rem;">
  <div class="donasi-judul" id="donasi">
    <?php
    if($ada == "TRUE"){
     ?>
      <h1 class="text-center" style="font-family: 'Roboto', sans-serif; font-size:20px;">Berita Berdasarkan Wilayah {{$kec}}</h1>
    <?php
  }elseif($ada == "FALSE"){
      ?>
      <div class="container mx-auto">
        <div class="alert alert-danger" style="margin-bottom:20rem; margin-top:10rem;"role="alert">
           Berita Berdasarkan Wilayah {{$kec}} Masih <strong>Kosong.</strong>
       </div>
      </div>
      <?php
    }
    ?>


  </div>
  <div class="card-donasi" id="card-donasi">

    <div class="row">
        @foreach($kecamatan as $data)

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
              <button class="card-btn"><a href="/donasi/{{$data->id}}/detail-donasi" style="text-decoration:none;">Selengkapnya </a><span>&rarr;</span></button>
            </div>
          </div>
        </div>


        @endforeach
    </div>
  </div>
</div>
@stop