@extends('adminlte::page')

@section('title', 'Wilayah-Create')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Wilayah-Create</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		<form action="{{ route('admin.utara.update', $utara->id) }}" method="post" enctype="multipart/form-data">
                  <input type="hidden" value="put" name="_method">
          			@csrf
          			<div class="form-group">
                        <label for="pengisi_acara">Upload Gambar</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <input type="file" name="gambar_restoran" id="pengisi_acara" class="form-control"><br>
                        <label for="pengisi_acara">Wilayah</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <select name="id_wilayah" id="" class="form-control">
                            <option value="2">Jakarta Utara</option>
                        </select><br>
                        <label for="pengisi_acara">Nama Restoran</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <input type="text" name="nama_restoran" class="form-control" value="{{$utara->nama_restoran}}"><br>
                        <label for="pengisi_acara">Deskripsi Restoran</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <textarea name="deskripsi_restoran" id="" cols="30" rows="10" class="form-control">{{$utara->deskripsi_restoran}}</textarea>
                        <label for="pengisi_acara">Alamat Restoran</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <textarea name="alamat_restoran" id="" cols="30" rows="10" class="form-control">{{$utara->alamat_restoran}}</textarea>
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