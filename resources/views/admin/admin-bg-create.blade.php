@extends('adminlte::page')

@section('title', 'background-Create')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Background-Create</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		<form action="{{ route('admin.bg.store') }}" method="post" enctype="multipart/form-data">
          			@csrf
          			<div class="form-group">
                        <label for="pengisi_acara">Upload Gambar</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <input type="file" name="background" id="pengisi_acara" class="form-control" value="{{ old('background')}}"><br>
                        <label for="pengisi_acara">Title</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <input type="text" name="title" class="form-control" value="{{old('title')}}"><br>
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