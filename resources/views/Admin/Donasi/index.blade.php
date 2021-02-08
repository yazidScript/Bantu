@extends('layouts.masteradmin')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" type="text/css" href="/Admin/css/jquery.fancybox-1.3.4.css">
<div class="row m-2">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Donasi / Berita</h3>

                <div class="card-tools">
                  <div class="input-group-append ml-3 mr-2 mt-3">
                      <a href="/dashboard/donasi/create"><i class="fas fa-plus"></i></a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Foto</th>
                      <th>Judul</th>
                      <th>Kecamatan</th>
                      <th>Isi</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($data_donasi as $data)
                    <tr>
                       <td>{{$data->id}}</td>
                        <td><a data-fancybox="gallery" href="../images/{{ $data->gambar }}"><img src="../images/{{ $data->gambar }}" class="ml-4" width="60px" height="60px"></td>
                        <td>{{$data->judul}}</td>
                        <td>{{$data->kecamatan}}</td>
                        <td>{{$data->isi}}</td>
                        <td></td>
                        <td></td>
                      </td>
                      <td>
                        <a href="/donasi/{{$data->id}}/detail" class="btn btn-sm btn-info">Detail</a>
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
