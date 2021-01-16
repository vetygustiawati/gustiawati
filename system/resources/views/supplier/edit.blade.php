@extends ('admin.admin')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Ubah Data Supplier
					</div>
						<div class="card-body">
							<form action="{{url('admin/supplier', $supplier->id)}}" method="post">
							@csrf
							@method("PUT")
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama" value="{{$supplier->nama}}">>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="control-label">Jenis Kelamin</label>
										<input type="text" class="form-control" name="jenis_kelamin" value="{{$supplier->jenis_kelamin}}">
									</div>	
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="" class="control-label">Alamat</label>
										<input type="text" class="form-control" name="alamat" value="{{$supplier->alamat}}">>
									</div>
								</div>	
								
									<button class="btn btn-dark float-right"><i class="fa fa-save">	</i>Simpan</button>
									</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection