<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;
/**
 * 
 */
class Produk extends Model{

	use ProdukAttributes, ProdukRelations;
	
	Protected $table = 'produk';

	Protected $casts = [
		'created_at' => 'datetime',	
		'updated_at' => 'datetime',
		'berat' => 'decimal:2'
	];

	
}