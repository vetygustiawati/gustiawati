@extends('admin.admin')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Supplier
					<a href="{{url('admin/supplier/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table">
							<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
							</thead>
								<tbody>
									@foreach($list_supplier as $supplier)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
											<a href="{{url('admin/supplier', $supplier->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/supplier', $supplier->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.utils.delete', ['url' => url('admin/supplier', $supplier->id)])
											</div>
										</td>
										<td>{{$supplier->nama}}</td>
										<td>{{$supplier->jenis_kelamin}}</td>
										<td>{{$supplier->alamat}}</td>
									</tr>
									@endforeach
								</tbody>
								
					</table>
				</div>
			</div>	
		</div>	
	</div>	
</div>
@endsection