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
                  <h1 class="donasi-detail-title col-12 order-md-1 order-2">{{$donasi->judul}}</h1>
                  <div class="donasi-detail order-md-2 order-1 col-12 row mb-2">
                      <div class="col-12 order-md-2 order-1">
                          <div class="img-detail">
                              <picture class="lazy loaded">
                                  <img alt="img-kudusbisa" class="lazy col-14 loaded" style="width:100%;" src="{{url('/images/'."$donasi->gambar")}}"/>
                              </picture>
                          </div>
                      </div>
                      <div class="donasi-detail-tanggal col-12 order-md-1 mb-3"><strong class="text-danger">Kudus Bisa</strong><span> </span></div>
                  </div>
              </div>
              <div class="donasi-detail-body">
                  <p>Hai Donatur,</p> <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
  Tooltip on right
</button>
                  <p>{{$donasi->isi}}</p>
              </div>
          </div>

      </div>
  </section>
  <div class="container">
    <div class="last-update">
      <h1 style="font-family: 'Roboto', sans-serif; font-size:28px;">Berita Terbaru</h1>
        <div class="card-last-update mt-5 mb-5">
          <div class="row">
                @foreach($donasi as $data)
            <div class="py-3 col-md-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="/images/{{ $donasi->gambar }}" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">{{ $donasi->judul}}</p>
              </div>
            </div>
           </div>
               @endforeach
          </div>
        </div>
      </div>
  </div>
</div>
@stop
