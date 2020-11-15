<?php 
namespace App\Http\Controllers;
use App\Models\Supplier;
class SupplierController extends Controller{
	function index(){
		$data['list_supplier'] = Supplier::all();

		return view('supplier.index', $data);
	}
	function create(){
		return view('supplier.create');
	}
	function store(){
		$supplier = new Supplier;
		$supplier->nama = request ('nama');
		$supplier->jenis_kelamin = request ('jenis_kelamin');
		$supplier->alamat = request ('alamat');
		$supplier->save();
			
			return redirect('admin/supplier')->with('success','Data Berhasil Ditambahkan');
		
	}
	function show(Supplier $supplier){
		$data['supplier'] = $supplier;
		return view('supplier.show', $data);
	}
	function edit(Supplier $supplier){
		$data['supplier'] = $supplier;
		return view('supplier.edit', $data);
	}
	function update(Supplier $supplier){
	
		$supplier->nama = request ('nama');
		$supplier->jenis_kelamin = request ('jenis_kelamin');
		$supplier->alamat = request ('alamat');
		$supplier->save();
			
		return redirect('admin/supplier')->with('success','Data Berhasil Diedit');
	}
	function destroy(Supplier $supplier){
		$supplier->delete();

		return redirect('admin/supplier')->with('danger','Data Berhasil Dihapus');

	}
}