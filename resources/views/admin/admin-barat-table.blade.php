@extends('adminlte::page')

@section('title', 'Wilayah-Table')

@section('content_header')
@stop

@section('content')
    
   <div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Table Wilayah</h3>
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('admin.barat.create')}}">
					<button class="btn btn-primary btn-xs">
						<i class="fa fa-plus"></i> Tambah
					</button>
				</a>
				<table class="table table-striped table-bordered" id="datatable">
					<thead>
						<tr>
							<th>Gambar Restoran</th>
							<th>Wilayah</th>
							<th>Nama Restoran</th>
							<th>Deskripsi Restoran</th>
							<th>Alamat Restoran</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach($barat as $v)	
						<tr>
							<td><img width="50" src="{{url(Storage::url($v->gambar_restoran))}}" alt=""></td>
							<td>{{$v->tipeWilayah->nama_wilayah}}</td>
							<td>{{$v->nama_restoran}}</td>
							<td>{{$v->deskripsi_restoran}}</td>
							<td>{{$v->alamat_restoran}}</td>
							<td>
								<div class="btn btn-group">
									<a href="" class="btn btn-warning btn-xs">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="" class="btn btn-danger btn-xs">
										<i class="fa fa-trash"></i>
									</a>
								</div>
							</td>
						</tr>
					@endforeach	
					</tbody>
					
	    			</table>
	    		</div>
	    	</div>
	    </div>	
	</div>		
@stop