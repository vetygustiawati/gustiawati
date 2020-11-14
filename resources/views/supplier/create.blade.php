@extends('admin.admin')

@section('content')
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12 mt-5">
				<div class = "card">
					<div class ="card-header">
					Tambah Data Supplier
					</div>
					<div class="card-body">
					<form action="{{url('supplier')}}" method="post">
						@csrf
					
					<div class="form-group">
					<label for="" class ="control-label">Nama Supplier</label>
					<input type="text" class="form-control" name="nama">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
					<label for="" class ="control-label">Jenis Kelamin</label>
					<input type="text" class="form-control" name="jenis_kelamin">
					</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
					<label for="" class ="control-label">Alamat</label>
					<input type="text" class="form-control" name="alamat">
					</div>
					</div>
					<div class="col-md-3">
					
					<button class = "btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
					</form>
						<table>
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 