<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\CategoriesBlog;
use Illuminate\Http\Request;

class CategoriesBlogController extends Controller
{
  public function catblog()
    {
      return view('admin.catblog', ['catblog' =>CategoriesBlog::all()->paginate(20) ]);
    }
}