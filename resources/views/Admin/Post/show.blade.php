@extends('layouts.masteradmin')
@section('content')
<div class="row col-md-12 mx-auto">
  <div class="col-md-6 m-3 mx-auto ">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <h3 class="profile text-center font-weight-bold">Detail Berita</h3>
            <ul class="list-group list-group-unbordered mb-3">
              <img class="rounded container mt-1 mb-2" style="width:130px;height:100px;" src="../images/{{ $post->thumbnail }}" alt="Card image cap">
              <li class="list-group-item">
                <b class="font-weight-bold">Jumlah Donasi - Sekarang</b> <h class="float-right text-danger"><td>Rp.{{number_format ($post->jumlah_sekarang)}}</td></h>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Jumlah Donatur Yang Berdonasi</b> <h class="float-right"><td>{{$post->total_donatur}}</td></h>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Dibuat Oleh</b> <a class="float-right">{{$post->user->name}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Dibuat Pada</b> <a class="float-right">{{$post->created_at->format('d M Y')}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Penerima Bantuan</b> <a class="float-right">{{$post->penerima}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Judul Berita</b> <a class="float-right">{{$post->title}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Slug</b> <a class="float-right">{{$post->slug}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Kategori</b> <a class="float-right">{{$post->kategori}} </a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Kecamatan</b> <a class="float-right">{{$post->kecamatan}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Conten Berita</b> <a class="float-right">{!! $post->content!!}</a>
              </li>
            </ul>
            <a href="/dashboard/post" class="text-primary" ><b>Kembali</b></a>
            <div class="d-inline" style="margin-right:auto; float:right;">
                <a href="{{Route('post.edit',$post->slug)}}" class="btn btn-warning btn-sm ml-2 text-white" ><b>edit</b></a>
                <a class="btn btn-danger btn-sm ml-2 text-white" data-toggle="modal" data-target="#exampleModal" ><b>Delete</b></a>
            </div>

          </div>
          <!-- /.card-body -->
        </div>
      </div>
</div>

<!-- Modal -->
<div class="container">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Data Donatur</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda ingin menghapus data post <strong>{{ $post->slug}}</strong> ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary">Tidak</button>
          <a href="/delete/{{ $post->slug }}" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
