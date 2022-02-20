<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Review;

class ReviewController extends Controller
{
  public function reviews()
    {
      $reviews = Review::with('client')
        ->with('produs')
        ->take(500)
        ->get()
        ->paginate(50);
//      dd($reviews );
      return view('admin.review', ['reviews' =>$reviews]);

    }
}