@extends('adminlte::page')

@section('title', 'Background-Table')

@section('content_header')
@stop

@section('content')
    
   <div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Table Background</h3>
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('admin.bg.create')}}">
					<button class="btn btn-primary btn-xs">
						<i class="fa fa-plus"></i> Tambah
					</button>
				</a>
				<table class="table table-striped table-bordered" id="datatable">
					<thead>
						<tr>
							<th>Gambar Background</th>
							<th>Title</th>
							<th>Created_at</th>
							<th>Updated_at</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach($bgk as $v)	
						<tr>
							<td><img width="50" src="{{url(Storage::url($v->background))}}" alt=""></td>
							<td>{{$v->title}}</td>
							<td>{{$v->created_at}}</td>
							<td>{{$v->updated_at}}</td>
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