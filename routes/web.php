<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', [HomeController::class, 'showAdmin']);

Route::get('about', [HomeController::class, 'showAbout']);

Route::get('profil', [HomeController::class, 'showProfil']);

Route::get('login', [AuthController::class, 'showLogin']);

Route::get('produk', [ProdukController::class, 'index']);

Route::get('produk/create', [ProdukController::class, 'create']);

Route::post('produk', [ProdukController::class, 'store']);

Route::get('produk/{produk}',[ProdukController::class, 'show']);

Route::get('produk/{produk}/edit',[ProdukController::class, 'edit']);

Route::put('produk/{produk}', [ProdukController::class, 'update']);

Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

Route::get('kategori', [KategoriController::class, 'index']);

Route::get('kategori/create', [KategoriController::class, 'create']);

Route::post('kategori', [KategoriController::class, 'store']);

Route::get('kategori/{kategori}',[KategoriController::class, 'show']);

Route::get('kategori/{kategori}/edit',[KategoriController::class, 'edit']);

Route::put('kategori/{kategori}', [KategoriController::class, 'update']);

Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy']);

Route::get('pelanggan', [PelangganController::class, 'index']);

Route::get('pelanggan/create', [PelangganController::class, 'create']);

Route::post('pelanggan', [PelangganController::class, 'store']);

Route::get('pelanggan/{pelanggan}',[PelangganController::class, 'show']);

Route::get('pelanggan/{pelanggan}/edit',[PelangganController::class, 'edit']);

Route::put('pelanggan/{pelanggan}', [PelangganController::class, 'update']);

Route::delete('pelanggan/{pelanggan}', [PelangganController::class, 'destroy']);

Route::get('supplier', [SupplierController::class, 'index']);

Route::get('supplier/create', [SupplierController::class, 'create']);

Route::post('supplier', [SupplierController::class, 'store']);

Route::get('supplier/{supplier}',[SupplierController::class, 'show']);

Route::get('supplier/{supplier}/edit',[SupplierController::class, 'edit']);

Route::put('supplier/{supplier}', [SupplierController::class, 'update']);

Route::delete('supplier/{supplier}', [SupplierController::class, 'destroy']);

Route::get('layout', [HomeClientController::class, 'showLayout']);
Route::get('about2', [HomeClientController::class, 'showAbout2']);
Route::get('profil2', [HomeClientController::class, 'showProfil2']);
Route::get('produk2', [HomeClientController::class, 'showProduk2']);
Route::get('kategori2', [HomeClientController::class, 'showKategori2']);
Route::get('login2', [HomeClientController::class, 'showLogin2']);

