<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model

{
    use HasFactory;
	
	protected $table = 'orders';
	public $timestamps = false;
	
	public function cos()
		{
			return $this->hasMany(Cart::class, 'ido');
		}
	public function users()
		{
			return $this->belongsTo(Users::class, 'idu');
		}
	public function factura()
		{
			return $this->hasMany(Invoice::class, 'id');
		}
	public function adresa()
		{
			return $this->hasMany(Adress::class, 'ido');
		}
	public function status()
		{
			return $this->belongsTo(Status::class, 'id_stare');
		}
}