@extends('layouts.master')
@section('content')

<header>
  <div class="banner" style="margin-top:60px; padding-top: 100px;">
    <div class="container">
          <img src="./Banner/bg-logo.svg" height="300px" width="300px" alt="">
          <div class="desc">
            <h1>#JAGA KUDUS</h1>
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
                         <img alt="img tentang" class="col-12" src="./asset/gambar1.png" type="image/jpeg"/>
                         <!-- <h1 style="font-size:30px; display:flex; justify-content: center;">Kudus Bisa !</h1> -->
                     </picture>
                 </div>
             </div>
         </div>
         <div class="col-12 col-md">
             <h1 class="title-hero" style="font-size:28px;">Waspada Virus Corona</h1>
             <div class="mb-2 mb-md-4" style="paddin-bottom:2px;">
                 Covid-19 / Corona<br />
                 Waspada dengan virus corona , yang sedang mengintai kita terutama di <strong>Kudus</strong> semoga kita semua terhindar dari virus tersebut,Informasi selanjutnya bisa dilihat <a href="https://www.covid19.go.id/" style="text-uppercase:inline;">DISINI</a><br />
                 Mari kita semua menaati peraturan / protokol kesehatan dengan melakukan 3M <br />
                 <br />

             </div>
         </div>
     </div>
 </div>
</section>
<div class="container mt-5 mb-5">
  <div class="judul-kategory">
    <h1 class="Kategori" style="font-family: 'Roboto' sans-serif; font-size:28px;">Kecamatan Kudus</h1>
    <!-- <i class="fas fa-arrow-right me-auto"></i> -->
  </div>
  <!-- <div class="row">
    <div class="container carousel-next">
         <i class="fas fa-arrow-right" style="display:flex; margin-right:100px; "></i>
    </div>
    <div class="container carousel-prev">
          <i class="fas fa-arrow-left" style="display:flex; margin-right:100px; "></i>
    </div>
  </div> -->
<div class="kecamatan">
  <div class="row">
    @foreach($donasi as $data)
     <div class="py-3 col-md-2" >
        <div class="card" style="border-radius:15px;">
          <div class="card-body">
            <h5 class="card-title text-center" style="font-weight: bold;"><a href="" style="text-decoration:none;">{{$data->kecamatan}}</a></h5>
          </div>
        </div>
     </div>
    @endforeach
</div>
</div>
</div>
<div class="container mt-5 mb-5">
  <div class="donasi-judul" id="donasi">
      <h1 style="font-family: 'Roboto', sans-serif; font-size:28px;">Donasi & Berita</h1>
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
              <button class="card-btn"><a href="/donasi/{{$data->id}}/detail-donasi" style="text-decoration:none;">Selengkapnya </a><span>&rarr;</span></button>
            </div>

          </div>
        </div>
        @endforeach
    </div>
  </div>
  <a href="/donasi" class="btn text-white" style="background-color:#3C3C55; text-transform: inherit; margin-bottom:20px;">Lebih Banyak</a>
</div>

@stop
