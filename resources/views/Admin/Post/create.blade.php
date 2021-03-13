@extends('layouts.masteradmin')
@section('content')

<div class="container-fluid">
<div class="row justify-content-center">
   <div class="col-md-8">
       <div class="card mt-3">
           <div class="card-header bg-primary text-white text-left ">Tambah Berita</div>

           <div class="card-body">
             <form method="POST" action="{{Route('post.store')}}" enctype="multipart/form-data">
                 {{csrf_field()}}

                 <div class="form-group row">
                     <label for="title" class="col-md-4 col-form-label text-md-right" id="title">Judul</label>
                     <div class="col-md-6">
                     <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}">
                     </div>
                     <span style="color:red; margin-left: 240px">{{ $errors->first('title') }}</span>
                 </div>
                 <!-- <div class="form-group row">
                     <label for="slug" class="col-md-4 col-form-label text-md-right" id="slug">Slug (Sesuai title)</label>
                     <div class="col-md-6">
                     <input name="slug" type="text" class="form-control" id="slug"  value="{{ old('title') }}" placeholder="slug-nama-berita">
                     </div>
                     <span style="color:red; margin-left: 240px">{{ $errors->first('slug') }}</span>
                 </div> -->
                 <div class="form-group row">
                     <label for="penerima" class="col-md-4 col-form-label text-md-right" id="title">Penerima</label>
                     <div class="col-md-6">
                     <input name="penerima" type="text" class="form-control" id="penerima" value="{{ old('penerima') }}">
                     </div>
                     <span style="color:red; margin-left: 240px">{{ $errors->first('title') }}</span>
                 </div>
                 <div class="form-group row">
                     <label for="kategori" class="col-md-4 col-form-label text-md-right">Kategori</label>
                     <div class="col-md-8">
                       <select class="form-control col-md-6" id="kategori" name="optionkat">
                         @foreach($kategori as $item)
                              <option value="{{$item->nama}}"> {{$item->nama}} </option>
                          @endforeach
                       </select>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="kecamatan" class="col-md-4 col-form-label text-md-right">Kecamatan</label>
                     <div class="col-md-8">
                       <select class="form-control col-md-6" id="kecamatan" name="option">
                         @foreach($kecamatan as $item)
                              <option value="{{$item->nama}}"> {{$item->nama}} </option>
                             @endforeach
                       </select>
                     </div>
                 </div>
                 <div class="form-group row">
                     <label for="thumbnail" class="col-md-4 col-form-label text-md-right">Thumbnail</label>
                     <div class="col-md-6">
                     <input name="thumbnail" type="file" class="form-control" value="{{ old('thumbnail') }}" id="thumbnail" required>
                     </div>
                     <span style="color:red; margin-left: 240px">{{ $errors->first('thumbnail') }}</span>
                 </div>
                 <div class="form-group">
                        <label>Content Berita</label>
                        <textarea name="content" class="form-control" rows="3" id="content"></textarea>
                      </div>
                 <div class="text-center">
                         <button class="btn btn-primary btn-block my-4 mx-auto col-md-10" type="submit">Tambah</button>
                 </div>
             </form>
           </div>
       </div>
   </div>
</div>
</div>
@stop
@section('footer')

<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
    fillEmptyBlocks: false,
    basicEntities: false
  };
</script>
<script>
    CKEDITOR.replace( 'content',options);
</script>
@stop
