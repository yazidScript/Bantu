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
                                  <img alt="img-kudusbisa" class="lazy col-14 loaded" src="{{url('/images/'."$donasi->gambar")}}"/>
                              </picture>
                          </div>
                      </div>
                      <div class="donasi-detail-tanggal col-12 order-md-1 mb-3"><strong class="text-danger">Kudus Bisa</strong><span> </span>19 feb 2021</div>
                  </div>
              </div>
              <div class="donasi-detail-body">
                  <p>Hai Donatur,</p>
                  <p>{{$donasi->isi}}</p>
              </div>
              <div class="donasi-detail">
                  <div class="donasi-detail d-flex flex-column align-items-center">
                      <a class="mb-2 mt-3" href="/detail/donation-check">
                          <button class="btn btn-danger px-5" style="text-transform:inherit;"><span>Donasi Sekarang !</span></button>
                      </a>
                  </div>
              </div>
          </div>

      </div>
  </section>
  <div class="last-update">
      <h1 style="font-size:30px;">Berita | Donasi Lainnya</h1>
    
  </div>
</div>
@stop
