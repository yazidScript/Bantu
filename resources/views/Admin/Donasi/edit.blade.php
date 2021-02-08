@extends('layouts.masteradmin')
@section('content')

<div class="row m-2">
  <div class="modal-body">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Edit Donasi | Berita</h3>
      </div>
       <form action="/dashboard/{{$donasi->id}}/update" method="POST" enctype="multipart/form-data">
          <div class="card-body">
              {{csrf_field()}}
            <div class="form-group">

                <input type="file" name="new_image" />
                <img src=" {{url('/images/'."$donasi->gambar")}}" class="img-thumbnail" width="100" />
                <input type="hidden" name="old_image" value="{{ $donasi->gambar }}" />
              <span style="color:red; margin-left: 240px">{{ $errors->first('gambar') }}</span>
            </div>
            <div class="form-group">
              <input name="judul" type="text" class="form-control" id="exampleModal" placeholder="Nama" value="{{$donasi->judul}}">
              <span style="color:red; margin-left: 240px">{{ $errors->first('judul') }}</span>
            </div>
            <div class="form-group row">
              <select class="form-control col-md-6" id="kecamatan" name="option">
                @foreach($kecamatan as $item)
                     <option value="{{$item->nama}}"> {{$item->nama}} </option>
                    @endforeach
              </select>
            </div>
            <div class="form-group">
              <input name="isi" type="text" class="form-control" id="exampleModal" placeholder="Email" value="{{$donasi->isi}}">
              <span style="color:red; margin-left: 240px">{{ $errors->first('isi') }}</span>
            </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-warning">Update</button>

              </div>
            </div>
          </div>
        </form>
     </div>
    </div>
@stop
