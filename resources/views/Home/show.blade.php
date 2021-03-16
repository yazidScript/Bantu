@extends('layouts.master')
@section('content')

<div class="container">

  <section class="c-section donasi-detail">
      <div class="row">
          <aside class="col-12 col-md-2">
              <div class="row pt-4 u-position u-position--sticky-top u-position--sticky-top--sec-top">
                  <div class="col-md-6 col-lg-4">
                      <div class="donasi-detail__sidebar hide-mb row align-items-center justify-content-center">
                          <div class="col-12 mb-2 text-center">Share</div>
                          <a class="donasi-share-wa" href="https://api.whatsapp.com/send?text=http://127.0.0.1:8000/detail/post/{{$post->slug }}">
                            <div class="col-12 mb-3">
                              <img lass="icon wa" src="/Logo/wa.svg" data-was-processed="true"/>
                            </div>
                          </a>
                          <div class="col-12 post-copy-link"><i class="fas fa-share-alt fa-2x" id="share"></i></div>
                      </div>
                  </div>
              </div>
          </aside>
          <div class="donasi-detail content col-12 col-md-8">
              <div class="header-row mr-0">
                  <h1 class="donasi-detail-title" style="font-size:50px; width:100%; margin-left:13px; font-weight:bold;">{{$post->title}}</h1>
                  <div class="donasi-detail-tanggal col-12 order-md-1 mb-1" style="display:flex;"> <strong class="text-danger">{{$post->kategori}}</strong> , <p style="font-weight:italic; margin-left:2px;"> {{$post->created_at->format('d M Y')}} </p></div>

                  <div class="">
                      <div class="col-12 order-md-2 order-1">
                          <div class="img-detail">
                              <picture class="lazy loaded" >
                                  <img alt="img-kudusbisa" class="lazy col-14 loaded" style="width:100%; height:100%;" src="/images/{{ $post->thumbnail }}"/>
                              </picture>
                          </div>
                      </div>

                  </div>
              </div>
              <div class="donasi-detail-body mt-3" style="margin-left:13px;">

                  <a  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Update Donasi
                  </a>

                <div class="collapse" id="collapseExample">
                  <div class="card card-body" >
                    <div style="display:flex;">
                       <p>Rincian Donasi dari </p> <strong class="ml-2"> {{$post->title}}</strong> <br>
                    </div>
                    <ul>
                      <ol>
                        Donasi Terkumpul - Sekarang = <strong class="text-danger">Rp.{{number_format ($post->jumlah_sekarang)}} </strong> <br>
                        Donasi Ini Akan Kami Serahkan Ke = <strong>{{$post->penerima}}</strong>
                      </ol>

                    </ul>
                  </div>
                </div>
                <p>
                  <p>{!! $post->content!!}</p>
              </div>
              <a class="text-white btn btn-danger" href="/donation/{{$post->id}}/donation-check" style="text-decoration:none; width:100%;">Donasi Sekarang</a>
          </div>

      </div>
  </section>
  <div class="container">
      <div class="main">
          <div class="row">
            <div class="col-md-4 mt-3">
            <h1 style="font-family: 'Roboto', sans-serif; font-size:28px;">Berita Lainnya</h1>
            </div>
          </div>
          <div class="row">
            @foreach ($feed_post as $key => $data)
            @if($key < 4)
            <div class="py-3 col-md-4">

                <img src="/images/{{ $data->thumbnail }}" class="card-img-top" alt="thumbnail" style="border-radius:6px;">
                <div class="card-body pl-1">
                  <a href="/detail/post/{{$data->slug}}" style="font-weight:bold; color:#000; padding-left:3px;">{{ $data->title }}</a>
                </div>

            </div>
            @endif
            @endforeach
          </div>
      </div>
  </div>
</div>
@stop
@section ('footer')

 <script>
   $('.collapse').collapse()
 </script>
@stop
