@extends ('admin.admin')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Supplier
					</div>
						<div class="card-body">
							<h3>{{$supplier->nama}}</h3>
							<hr>
							<p>
								Jenis Kelamin {{($supplier->jenis_kelamin)}} |
								Alamat : {{$supplier->alamat}} |
								
							</p>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection