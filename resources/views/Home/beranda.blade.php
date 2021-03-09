@extends('layouts.master')
@section('content')

<header>
  <div class="banner" style="padding-top: 100px;">
    <div class="container">
          <img src="./Banner/bg-logo.svg" height="300px" width="300px" alt="">
          <div class="desc">
            <h1 class="banner-text"style="font-weight:bold;">#JAGA KUDUS</h1>
            <p>Donasikan sedikit uang anda untuk warga yang terkena bencana</p>
            <a href="/berita" class="btn text-white" style="background-color:#E40B0B; text-transform:inherit;">Donasi Yuk</a>
          </div>
    </div>
  </div>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f7f7e8" fill-opacity="1" d="M0,256L26.7,234.7C53.3,213,107,171,160,160C213.3,149,267,171,320,197.3C373.3,224,427,256,480,277.3C533.3,299,587,309,640,288C693.3,267,747,213,800,197.3C853.3,181,907,203,960,224C1013.3,245,1067,267,1120,266.7C1173.3,267,1227,245,1280,229.3C1333.3,213,1387,203,1413,197.3L1440,192L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
</svg>

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
          <div class="card" style="max-height: 100%;">
            <div class="donasi-img-wrapper">
              <img src="../images/{{$data->thumbnail}}" class="card-img-top" style="height: 100%;"/>
            </div>
            <div class="card-body d-flex flex-column">
              <p class="card-kategory small text-primary">{{$data->kategori}}</p>
              <h5 class="card-title">{{$data->title}}</h5>
              <p class="card-text">
                {{ \Illuminate\Support\Str::limit(strip_tags($data->content),150)}} <a href="/detail/post/{{$data->slug}}" class="text-danger">Read More</a>
              </p>
            </div>

          </div>
        </div>
        @endforeach
    </div>
  </div>
</div>
@stop
