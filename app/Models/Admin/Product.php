<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
		protected $table = "products";
	public $timestamps = false;
	
	public function manufacturers()
		{
			return $this->belongsTo(Manufacturer::class, 'id_prod');
		}
	

}