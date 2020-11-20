@extends('admin.admin')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Filter
				</div>
				<div class="card-body">
					<form action="{{url('admin/pelanggan/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
						<input type="text" class="form-control" name="nama" value="{{$nama ??""}}">
						</div>
						<button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
					</form>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					Data Pelanggan
					<a href="{{url('admin/pelanggan/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
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
									@foreach($list_pelanggan as $pelanggan)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
											<a href="{{url('admin/pelanggan', $pelanggan->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/pelanggan', $pelanggan->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.utils.delete', ['url' => url('admin/pelanggan', $pelanggan->id)])
											</div>
										</td>
										<td>{{$pelanggan->nama}}</td>
										<td>{{$pelanggan->jenis_kelamin}}</td>
										<td>{{$pelanggan->alamat}}</td>
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