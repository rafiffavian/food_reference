@extends('adminlte::page')

@section('title', 'Wilayah-Create')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Wilayah-Edit</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		<form action="{{ route('admin.wilayah.update', $wil->id) }}" method="post" enctype="multipart/form-data">
          			@csrf
                    <input type="hidden" value="put" name="_method">
          			<div class="form-group">
                        <label for="pengisi_acara">Upload Gambar</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <input type="file" name="gambar_wilayah" id="pengisi_acara" class="form-control"><br>
                        <label for="pengisi_acara">Nama Wilayah</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <input type="text" name="nama_wilayah" class="form-control" value="{{$wil->nama_wilayah}}"><br>
                        <label for="pengisi_acara">Description</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <textarea name="deskripsi_wilayah" id="" cols="30" rows="10" class="form-control">{{$wil->deskripsi_wilayah}}</textarea>
          			</div>
          			<div class="form-group text-right">
                  <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
          		</form>
          	</div>
          </div>
      </div>
    </div>

@endsection