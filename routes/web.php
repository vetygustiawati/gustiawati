<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;

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





Route::get('layout', [HomeClientController::class, 'showLayout']);
Route::get('about2', [HomeClientController::class, 'showAbout2']);
Route::get('profil2', [HomeClientController::class, 'showProfil2']);
Route::get('produk2', [HomeClientController::class, 'showProduk2']);
Route::get('kategori2', [HomeClientController::class, 'showKategori2']);
Route::get('login2', [HomeClientController::class, 'showLogin2']);

Route::prefix('admin')->middleware('auth')->group(function(){
	Route::resource('produk', ProdukController::class);
	Route::resource('kategori', KategoriController::class);
	Route::resource('pelanggan', PelangganController::class);
	Route::resource('supplier', SupplierController::class);
	Route::resource('user', UserController::class);
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
	
