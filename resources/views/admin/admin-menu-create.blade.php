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
          		<form action="{{ route('admin.menu.store') }}" method="post">
          			@csrf
          			<div class="form-group">

                        <label for="pengisi_acara">Nama Menu</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <input type="text" name="nama_menu" class="form-control" value="{{old('nama_menu')}}"><br>
                        <label for="pengisi_acara">Jenis Menu</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <select name="id_jenismenu" id="select" class="form-control">
                          @foreach(App\TypeMenu::all() as $item) 
                            <option value="{{$item->id}}">{{$item->jenis_menu}}</option>
                          @endforeach  
                        </select><br>
                        <label for="pengisi_acara">Nama Restoran</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <select name="id_restoran" id="selectkuy" class="form-control">
                          @foreach(App\Restoran::all() as $resto) 
                            <option value="{{$item->id}}">{{$resto->nama_restoran}}</option>
                          @endforeach  
                        </select><br>
                        <label for="pengisi_acara">Harga</label> <!-- for di dalem lebel itu merujuk pada id -->
                        <input type="text" name="harga" class="form-control" value="{{old('harga')}}"><br>
                        
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
@section('js')
    <script>
    $(document).ready(function() {
      $('#select').select2();
  } );
    $(document).ready(function() {
      $('#selectkuy').select2();
  } );
  </script> 
@stop