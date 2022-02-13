<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagini extends Model
{
	use HasFactory;
	protected $table = 'pagini';
	public $timestamps = false;
	protected $fillable = [
		'name',
		'title',
		'keywords',
		'description',
		'link',
		'id_lang',
		'codp',
		'producator',
		'status',
		'loc',
		'poz',
		'img',
		'pdf',
		'tip',
		'text'
	];
	/**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
		{
			return 'link';
		}
}