@extends('admin.admin')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Produk
					<a href="{{url('kategori/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table">
							<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Nama</th>
									
							</thead>
								<tbody>
									@foreach($list_kategori as $kategori)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
											<a href="{{url('kategori', $kategori->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('kategori', $kategori->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.utils.delete', ['url' => url('kategori', $kategori->id)])
											</div>
										</td>
										<td>{{$kategori->nama}}</td>
										
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