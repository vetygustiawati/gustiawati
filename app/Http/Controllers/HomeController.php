<?php

namespace App\Http\Controllers;

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
	
}