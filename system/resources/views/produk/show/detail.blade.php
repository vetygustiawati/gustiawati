<p>
								{{($produk->harga)}} |
								Stok : {{$produk->stok}} |
								Berat : {{$produk->berat}} kg |
								Seller : {{$produk->seller->username}} |
								Tanggal Produk : {{$produk->created_at->diffForHumans()}}
							</p>