<?php

namespace App\Http\Controllers\Admin;


use App\Models\Userss;
use Illuminate\Http\Request;

class UserssController extends Controller
{
  public function index()
    {
      $products = Userss::all()->toArray();
      return array_reverse($products);
    }

  public function show($id) {
    $product = Userss::find($id);
    return response()->json($product);
  }
}