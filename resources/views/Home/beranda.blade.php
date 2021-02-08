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

<!-- <div class="container mt-3 mb-3">
    <div class="tentang-kami">
         <h1 style="font-family: 'Roboto' sans-serif;">Tentang Kami</h1>
          <p>Yayasan Pundi Amal Peduli Kasih (YPP) merupakan komitmen manajemen Grup Elang Mahkota Teknologi (EMTEK) untuk berpartisipasi dalam bidang sosial dan kemanusiaan sebagai wujud tanggungjawab sosial perusahaan. Cikal bakal YPP dari bidang sosial dan csr masing-masing unit usaha di bawah Grup Emtek seperti Pundi Amal di SCTV dan Peduli Kasih di Indosiar. Maka, pada 11 November 2015, Manajemen Grup Emtek memutuskan mendirikan Yayasan Pundi Amal Peduli Kasih (YPP) berdasarkan Akte Notaris No. 38, di Jakarta dan mendapatkan pengesahan Menteri Hukum dan Hak Asasi Manusia Republik Indonesia, dengan SK Nomor AHU-0023500.AH.01.04.Tahun 2015.</p>
    </div>
</div> -->

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
                     <div class="u-lazy__placeholder-2"></div>
                 </div>
             </div>
         </div>
         <div class="col-12 col-md ">
             <h1 class="title" style="font-size:30px;">Waspada Virus Corona</h1>
             <div class="mb-2 mb-md-4">
                 Covid-19 / Corona<br />
                 Waspada dengan virus corona , yang sedang mengintai kita terutama di <strong>Kudus</strong> semoga kita semua terhindar dari virus tersebut,Informasi selanjutnya bisa dilihat <a href="https://www.covid19.go.id/" style="text-uppercase:inline;">DISINI</a><br />
                 <br />
                 Mari kita semua menaati peraturan / protokol kesehatan dengan melakukan 3M <br />
                 <br />

             </div>
         </div>
     </div>
 </div>
</section>

<div class="container mt-5 mb-5">
  <div class="judul-kategory">
    <h1 class="Kategori" style="font-family: 'Roboto' sans-serif; font-size:30px;">Kecamatan</h1>
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
     <div class="py-3 col-md-2">
        <div class="card" style="border-radius:15px;">
          <div class="card-body">
            <h5 class="card-title text-center" style="font-weight: bold;">{{$data->kecamatan}}</h5>
          </div>
        </div>
     </div>
    @endforeach
</div>
</div>
</div>
<div class="container mt-5 mb-5">
  <div class="donasi-judul" id="donasi">
      <h1 style="font-family: 'Roboto', sans-serif; font-size:30px;">Donasi</h1>
  </div>
  <div class="card-donasi" id="card-donasi">
    <div class="row">
        @foreach($donasi as $data)
        <div class="py-3 col-md-3">
          <div class="card" style="height: 100%;">
            <div class="donasi-img-wrapper">
              <img src="../images/{{ $data->gambar }}"class="card-img-top" style="height: 100%;" alt="..."/>
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{$data->judul}}</h5>
              <p class="card-text">
                {{$data->isi}}
              </p>
              <div class="mt-auto">
                <style media="screen">
                  a:hover{
                    text-decoration: none;
                    color:#E40B0B;
                  }
                </style>
                <a href="/" class="text" style="color:#E40B0B;">Selengkapnya</a>
              </div>
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
