<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Produk extends Model{
	
	Protected $table = 'produk';

	Protected $casts = [
		'created_at' => 'datetime',	
		'updated_at' => 'datetime',
		'berat' => 'decimal:2'
	];

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function getHargaStringAttribute(){
		return "Rp.".number_format($this->attributes['harga']);
	}
}