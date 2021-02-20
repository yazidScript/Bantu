@extends('layouts.masteradmin')
@section('content')
<div class="card m-2">
  <div class="col-md-12">
    <div class="card-header">
      <h3 class="card-title">Status Diterima / Riwayat Diterima</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Nama Donatur</th>
            <th>email</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($donatur as $data)
          <tr>
            <td>{{$data->id}}</td>
            <td> <a href="/dashboard/statusditerima" style="color: blue">{{$data->namalengkap}}</a></td>
            <td>{{$data->email}}</td>
            <td><span class="badge bg-success">Di terima</span></td>
            <td><a href="/dashboard/detail_pengunjung/{{$data['id']}}" class="btn btn-sm btn-info">Detail</a></td>
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
 </div>
@stop
