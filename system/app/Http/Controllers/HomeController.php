<?php

namespace App\Http\Controllers;
use App\Models\Produk;
/**
 * 
 */
class HomeController extends Controller{
	
	function showAdmin(){
		return view('admin.admin');
	}
	function showAbout(){
		return view('about');
	}
	function showProfil(){
		return view('profil');
	}
	function showKategori(){
		return view('kategori');
	}
	function showProduk(){
		return view('produk');
	}
	function showPelanggan(){
		return view('pelanggan');
	}
	function showSupplier(){
		return view('supplier');
	}
	function testCollection(){
		$list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];

		$list_bike = collect($list_bike);
		$list_produk = Produk::all();

		// sorting
		// sort by harga terendah
		// dd($list_produk->sortBy('harga'));

		// sort by harga tertinggi
		// dd($list_produk->sortByDesc('harga'));
		
	// filter
		// $filtered = $list_produk->filter(function($item){
		// 	return $item->harga > 12000;
		// });
		// dd($filtered);

		// $sum = $list_produk->average('harga');
		// dd($sum);

		$data['list'] = Produk::Paginate(15);
		return view('test-collection', $data);
		
		dd($list_bike, $list_produk);
	}
}