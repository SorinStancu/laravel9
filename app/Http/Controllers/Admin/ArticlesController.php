<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
  public function news()
    {
      return view('admin.news', ['news' =>Articles::all()->paginate(20) ]);
    }
}