<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\ArticlesBlog;
use Illuminate\Http\Request;

class ArticlesBlogController extends Controller
{
  public function artblog()
    {
      return view('admin.artblog', ['artblog' =>ArticlesBlog::all()->paginate(20) ]);
    }
}