<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Product;
use Illuminate\Http\Request;

class EditareProdusController extends Controller
{
  public function edit_prod(Request $request)
    {

      $prod = Product::first();

      return view('admin.edit-prod', ['prod' => $prod]
      );
    }
}