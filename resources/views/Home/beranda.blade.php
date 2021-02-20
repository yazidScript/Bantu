@extends('layouts.master')
@section('content')

<header>
  <div class="banner" style="margin-top:60px; padding-top: 100px;">
    <div class="container">
          <img src="./Banner/bg-logo.svg" height="300px" width="300px" alt="">
          <div class="desc">
            <h1 style="font-weight:bold;">#JAGA KUDUS</h1>
            <p>Donasikan sedikit uang anda untuk warga yang terkena bencana</p>
            <a href="" class="btn text-white" style="background-color:#E40B0B; text-transform:inherit;">Donasi Yuk</a>
          </div>
    </div>
  </div>
</header>

<section class="section container pt-2 pt-md-4" style="margin-top:7px; margin-bottom:3px;">
 <div class="container px-2 px-md-0">
     <div class="row align-items-center">
         <div class="col-12 col-md order-md-2 col-md-3">
             <div class="row">
                 <div class="col-12">
                     <picture class="img-tentang">
                         <img alt="img tentang" class="col-12" src="/asset/gambar2.png" type="image/jpeg"/>
                         <!-- <h1 style="font-size:30px; display:flex; justify-content: center;">Kudus Bisa !</h1> -->
                     </picture>
                 </div>
             </div>
         </div>
         <div class="col-12 col-md">
             <h1 class="title-hero" style="font-size:28px;">Waspada Virus Corona</h1>
             <div class="mb-2 mb-md-4" style="paddin-bottom:2px;">
                 Covid-19 / Corona<br />
                 Waspada dengan virus corona , yang sedang mengintai kita terutama di <strong>Kudus</strong> semoga kita semua terhindar dari virus tersebut,Informasi selanjutnya bisa dilihat <a href="https://www.covid19.go.id/" target="_blank" style="text-uppercase:inline;">DISINI</a><br />
                 Mari kita semua menaati peraturan / protokol kesehatan dengan melakukan 3M <br />
                 <br />

             </div>
         </div>
     </div>
 </div>
</section>

<div class="container mt-5 mb-5">
  <div class="donasi-judul" id="donasi">
      <h1 style="font-family: 'Roboto', sans-serif; font-size:28px;">Berita Terbaru</h1>
  </div>
  <div class="card-donasi" id="card-donasi">

    <div class="row">
        @foreach($posts as $data)
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
  <a href="/berita" class="btn text-white" style="background-color:#3C3C55; text-transform: inherit; margin-bottom:20px;">Lebih Banyak</a>
</div>
@stop
