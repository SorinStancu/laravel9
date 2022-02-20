<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
		protected $table ="categories";
	  public $timestamps = false;
  protected $fillable = [
    'name',
    'poz',
    'active',
    'url',
    'id_lang',
    'idc',
    'filtre',
    'img',
    'lvl'
  ];

	public function subcategorii()
		{
			return $this->hasMany(self::class, 'idc');
		}
	public function subsubcategorii()
		{
			return $this->hasMany(self::class, 'idc');
		}

}