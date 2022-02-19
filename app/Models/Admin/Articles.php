<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
  protected $table = 'articles';
  public $timestamps = false;
  protected $fillable = ['name', 'active', 'url', 'id_lang', 'idc', 'img', 'title','description','keywords','video','date','vizionari'];
}