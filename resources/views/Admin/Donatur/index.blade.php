@extends('layouts.masteradmin')
@section('content')
  <div class="row m-2">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Donatur</h3>
              <form class="card-tools ml-3" method="get" action="/dashboard/donatur">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="cari" class="form-control float-right" placeholder="Cari Donatur">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
                <div style="float:right; margin-left:4px;">
                  <a href="/donatur/export/" type="button" class="btn btn-success btn-sm" >
                    Export Donatur
                  </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Id Donatur</th>
                    <th>Id Donasi</th>
                    <th>Foto KTP</th>
                    <th>Email</th>
                    <th>No Telephone</th>
                    <th>Nama Lengkap</th>
                    <th>metodebayar</th>
                    <th>Nominal</th>
                    <th>Status</th>
                    <th>Waktu</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($donatur as $dot)
                  <tr>
                     <td>{{$dot->id}}</td>
                     <td >{{$dot->post_id}}</a></td>
                       <td><a data-fancybox="gallery" href="../images-donatur/{{ $dot->gambar_ktp }}"><img src="../images-donatur/{{ $dot->gambar_ktp }}"  width="60px" height="60px"></td>
                      <td>{{$dot->email}}</td>
                      <td>{{$dot->notlp}}</td>
                      <td>{{$dot->namalengkap}}</td>
                      <td>{{$dot->metodebayar}}</td>
                      <td>Rp.{{number_format ($dot->nominal)}}</td>
                      <td>{{$dot->status}}</td>
                      <td><span class="badge badge-pill badge-warning">{{\Carbon\Carbon::parse($dot->created_at)->diffForHumans() }}</span></td>

                    <td>
                      @if($dot->status == "Belum diterima")
                            <a href="/donatur/{{$dot->id}}/sendemail" class="btn btn-sm btn-info">Terima</a>
                        @elseif($dot->status == "Di terima")
                      @endif
                    </td>
                    <td>  <a class="btn btn-sm btn-danger text-white delete" donatur-id="{{$dot->id}}">Delete</a></td>
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

@stop
@section('footer')
<script>
   $('.delete').click(function(){
     var donatur_id = $(this).attr('donatur-id');
     swal({
       title: "Anda Yakin ?",
       text: "Yakin Ingin Menghapus Data Donatur Dengan ID "+ donatur_id +" ?",
       icon: "warning",
       buttons: true,
       dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
         window.location = "/delete/"+ donatur_id +"/donatur"
       }
     });
   });
</script>
@stop
