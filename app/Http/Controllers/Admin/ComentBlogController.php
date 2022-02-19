<?php

namespace App\Http\Controllers\Admin;

use App\Models\ComentBlog;
use Illuminate\Http\Request;

class ComentBlogController extends Controller
{
  public function catblog()
    {
      return view('admin.comblog', ['comblog' =>ComentBlog::all()->paginate(20)]);
    }
}