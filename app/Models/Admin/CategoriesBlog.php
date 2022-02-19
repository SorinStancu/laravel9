<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesBlog extends Model
{
    use HasFactory;

  protected $table = 'categoriesblog';
  public $timestamps = false;
  protected $fillable = ['name', 'poz', 'active', 'url', 'id_lang', 'idc', 'filtre', 'img', 'lvl'];
}