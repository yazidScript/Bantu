@extends('layouts.masteradmin')
@section('content')
  <div class="row m-2">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Donatur</h3>
              <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama Pengaju</th>
                    <th>Email</th>
                    <th>No Telephone</th>
                    <th>Tanggal Bencana</th>
                    <th>Alamat Bencana</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($pengajuan as $data)
                  <tr>
                      <td>{{$data->id}}</td>
                      <td >{{$data->namalengkap}}</a></td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->notlp}}</td>
                      <td>{{$data->tanggal}}</td>
                      <td>{{$data->alamat}}</td>
                      <td></td>
                    </td>
                    <td>
                      <a href="/pengajuan/send" class="btn btn-sm btn-info">Terima</a>
                      <a class="btn btn-sm btn-danger text-white delete" pengajuan-id="{{$data->id}}">Delete</a>
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
      <!-- Button trigger modal -->

@stop
@section ('footer')
<script>
   $('.delete').click(function(){
     var pengajuan_id = $(this).attr('pengajuan-id');
     swal({
       title: "Anda Yakin ?",
       text: "Yakin Ingin Menghapus Data Donatur Dengan ID "+ pengajuan_id +" ?",
       icon: "warning",
       buttons: true,
       dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
         window.location = "/delete/"+ pengajuan_id +"/pengajuan"
       }
     });
   });
</script>

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif

@stop
