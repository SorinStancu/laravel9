<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

  protected $table = 'review';
  public $timestamps = false;

  public function client()
    {
      return $this->hasMany(Users::class, 'id');
    }
  public function produs()
    {
      return $this->hasMany(Product::class, 'id');
    }
}