<?php

namespace App\Http\Controllers;

/**
 * 
 */
class HomeClientController extends Controller{
	
	function showLayout(){
		return view('admin.layout');
	}
	function showAbout2(){
		return view('about2');
	}
	function showProfil2(){
		return view('profil2');
	}
	function showKategori2(){
		return view('kategori2');
	}
	function showProduk2(){
		return view('produk2');
	}
	function showLogin2(){
		return view('login2');
	}
	
	
}