@extends('layouts.masteradmin')
@section('content')
<div class="row col-md-12 mx-auto">
  <div class="col-md-6 m-3 mx-auto ">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <h3 class="profile-username text-center font-weight-bold">Detail Donasi</h3>
            <ul class="list-group list-group-unbordered mb-3">
              <img class="rounded-circle container mt-1 mb-2" style="width:130px;height:100px;" src="{{url('/images/'."$donasi->gambar")}}" alt="Card image cap">
              <li class="list-group-item">
                <b class="font-weight-bold">Judul Berita | Donasi</b> <a class="float-right">{{$donasi->judul}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Kecamatan</b> <a class="float-right">{{$donasi->kecamatan}}</a>
              </li>
              <li class="list-group-item">
                <b class="font-weight-bold">Isi</b> <a class="float-right">{{$donasi->isi}}</a>
              </li>
            </ul>
            <a href="/dashboard/donasi" class="text-primary" ><b>Kembali</b></a>
            <div class="d-inline" style="margin-right:auto; float:right;">
                <a href="/dashboard/{{$donasi->id}}/edit" class="btn btn-warning btn-sm ml-2 text-white" ><b>edit</b></a>
                <a href="/dashboard/{{$donasi->id}}/delete" class="btn btn-danger btn-sm ml-2" ><b>Delete</b></a>
            </div>

          </div>
          <!-- /.card-body -->
        </div>
      </div>
</div>

@stop
