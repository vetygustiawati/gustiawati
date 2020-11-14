@extends ('admin.admin')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Pelanggan
					</div>
						<div class="card-body">
							<h3>{{$pelanggan->nama}}</h3>
							<hr>
							<p>
								Jenis Kelamin {{($pelanggan->jenis_kelamin)}} |
								Alamat : {{$pelanggan->alamat}} |
								
							</p>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection