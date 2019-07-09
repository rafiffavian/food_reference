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
				<a href="{{route('admin.wilayah.create')}}">
					<button class="btn btn-primary btn-xs">
						<i class="fa fa-plus"></i> Tambah
					</button>
				</a>
				<table class="table table-striped table-bordered" id="datatable">
					<thead>
						<tr>
							<th>Gambar Wilayah</th>
							<th>Nama Wilayah</th>
							<th>Deskripsi Wilayah</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach($wilayah as $v)	
						<tr>
							<td><img width="50" src="{{url(Storage::url($v->gambar_wilayah))}}" alt=""></td>
							<td>{{$v->nama_wilayah}}</td>
							<td>{{$v->deskripsi_wilayah}}</td>
							<td>
								<div class="btn btn-group">
									<a href="{{route('admin.wilayah.edit',$v->id)}}" class="btn btn-warning btn-xs">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="{{route('admin.wilayah.delete',$v->id)}}" class="btn btn-danger btn-xs">
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