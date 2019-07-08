@extends('adminlte::page')

@section('title', 'Wilayah-Table')

@section('content_header')
@stop

@section('content')
    
   <div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Table Menu</h3>
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('admin.menu.create')}}">
					<button class="btn btn-primary btn-xs">
						<i class="fa fa-plus"></i> Tambah
					</button>
				</a>
				<table class="table table-striped table-bordered" id="datatable">
					<thead>
						<tr>
							<th>Nama Menu</th>
							<th>Restoran</th>
							<th>Jenis Menu</th>
							<th>Harga Menu</th>
							<!-- <th>Action</th> -->
						</tr>
					</thead>
					<tbody>
					@foreach($menu as $v)	
						<tr>
                            <td>{{$v->nama_menu}}</td>
							<td>{{$v->tipeRestoran->nama_restoran}}</td>
							<td>{{$v->tipeMenu->jenis_menu}}</td>
							<td>{{$v->harga}}</td>
							<!-- <td>
								<div class="btn btn-group">
									<a href="" class="btn btn-warning btn-xs">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="" class="btn btn-danger btn-xs">
										<i class="fa fa-trash"></i>
									</a>
								</div>
							</td> -->
						</tr>
					@endforeach	
					</tbody>
					
	    			</table>
	    		</div>
	    	</div>
	    </div>	
	</div>	
@endsection

@section('js')	
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	
	<script>
		$(document).ready(function() {
    		let dataTable = $('#datatable').DataTable({
			processing: true,
			serverSide: true,
			ajax: '{!! route('admin.menu.getJsonData') !!}',
			method: "GET",
			dom: 'Bfrtip',
			columns: [
				{ data: 'nama_menu', name: 'nama_menu' },//name gausah di otak atik
				{ data: 'tipe_restoran.nama_restoran', name: 'tipeRestoran.nama_restoran' },
				{ data: 'tipe_menu.jenis_menu', name: 'tipeMenu.jenis_menu' },
				{ data: 'harga', name: 'harga' },
				// { 

				// 	data:'action',
				// 	searchable: false,
				// 	orderable: false,
				// 	className: 'text-center',
				// 	width:90,

				// },
				
			],	

		});

	} );
	</script>
@stop