<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
	protected $table = 'cart';
	public $timestamps = false;

	public function orderss()
		{
			return $this->belongsTo(Order::class, 'id');

		}
}