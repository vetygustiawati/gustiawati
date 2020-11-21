<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Produk extends Model{
	
	Protected $table = 'produk';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}
}