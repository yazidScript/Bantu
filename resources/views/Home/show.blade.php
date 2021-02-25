@extends('layouts.master')
@section('content')

<div class="container" style="margin-top:100px;">
  <section class="c-section donasi-detail">
      <div class="row">
          <aside class="col-12 col-md-2">
              <div class="row pt-4 u-position u-position--sticky-top u-position--sticky-top--sec-top">
                  <div class="col-md-6 col-lg-4">
                      <div class="donasi-detail__sidebar hide-mb row align-items-center justify-content-center">
                          <div class="col-12 mb-2 text-center">Share</div>
                          <a class="donasi-detail share-link" href="https://api.whatsapp.com/" target="_blank">
                            <div class="col-12 mb-3">
                              <img lass="icon wa" src="/Logo/wa.svg" data-was-processed="true"/>
                            </div>
                          </a>
                          <a class="donasi-detail share-link" href="https://api.facebook.com/" target="_blank">
                            <div class="col-12 mb-3">
                              <img class="icon fb" src="/Logo/fb.svg" data-was-processed="true"/>
                            </div>
                          </a>
                      </div>
                  </div>
              </div>
          </aside>
          <div class="donasi-detail content col-12 col-md-8">
              <div class="donasi-detail header row">
                  <h1 class="donasi-detail-title col-12 order-md-1 order-2" style="font-size:30px; width:100%;">{{$post->title}}</h1>
                  <div class="donasi-detail order-md-2 order-1 col-12 row mb-2">
                      <div class="col-12 order-md-2 order-1">
                          <div class="img-detail">
                              <picture class="lazy loaded">
                                  <img alt="img-kudusbisa" class="lazy col-14 loaded" style="width:100%; height:100%;" src="../images/{{ $post->thumbnail }}"/>
                              </picture>
                          </div>
                      </div>
                      <div class="donasi-detail-tanggal col-12 order-md-1 mb-3"><strong class="text-danger">{{$post->kategori}}</strong> , <span style="font-weight:italic;">{{$post->created_at->format('d M Y')}}</span></div>
                  </div>
              </div>
              <div class="donasi-detail-body">
                <p>
                  <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Rincian
                  </a>
                </p>
                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    Rincian Donasi dari <strong>{{$post->title}}</strong> <br>
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
            <div class="col-md-4">
            <h1 style="font-family: 'Roboto', sans-serif; font-size:28px;">Berita Lainnya</h1>
            </div>
          </div>
          <div class="row">
            @foreach ($post->all()->take(3) as $data)
            <div class="py-3 col-md-4">
              <div class="card" >
                <img src="../images/{{ $data->thumbnail }}" class="card-img-top" alt="thumbnail">
                <div class="card-body">
                  <a href="{{Route('detail.post',$data->slug)}}" style="font-weight:bold; color:#000;">{{ $data->title }}</a>
                </div>
              </div>
            </div>
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
