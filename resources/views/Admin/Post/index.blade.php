@extends('layouts.masteradmin')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" type="text/css" href="/Admin/css/jquery.fancybox-1.3.4.css">
<div class="row m-2">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Berita</h3>
                <!-- <form class="card-tools ml-3" method="get" action="/post">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="cari" class="form-control float-right" placeholder="Cari Berita">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form> -->
                <div class="card-tools">
                  <div class="right">
                      <a href="{{Route('post.create')}}"><i class="fas fa-plus"></i></a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID Berita</th>
                      <th>Thumbnail</th>
                      <th>Title</th>
                      <th>kategori</th>
                      <th>Kecamatan</th>
                      <th>Content</th>
                      <th>Jumlah Donatur</th>
                      <th>Jumlah Sekarang</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($posts as $data)
                    <tr>
                       <td>{{$data->id}}</td>
                        <td><a data-fancybox="gallery" href="../images/{{ $data->thumbnail }}"><img src="../images/{{ $data->thumbnail }}" class="ml-4" width="60px" height="60px"></td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->kategori}}</td>
                        <td>{{$data->kecamatan}}</td>
                        <td>{{ \Illuminate\Support\Str::limit(strip_tags($data->content),150)}}</td>
                        <td>{{ $data->total_donatur }}</td>
                        <td><p class="text-danger">Rp.{{number_format ($data->jumlah_sekarang)}}</p></td>
                        <td><a href="/show/{{$data->slug}}" class="btn btn-sm btn-info">Detail</a><td>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


        <script src="/Admin/js/jquery.fancybox-1.3.4.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
          $("gallery.fancybox").fancybox();
        });
      </script>


@stop
