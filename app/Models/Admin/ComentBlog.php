<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentBlog extends Model
{
    use HasFactory;
  protected $table = 'reviewsblog';
  public $timestamps = false;
  protected $fillable = ['name', 'poz', 'active', 'url', 'id_lang', 'idc'];
}