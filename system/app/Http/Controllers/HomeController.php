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

		$collection = collect($list_bike);
		$list_produk = Produk::all();
		dd($collection->count());
		dd($list_bike, $collection, $list_produk);
	}
}