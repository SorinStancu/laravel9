<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Vouchere;
use Illuminate\Http\Request;

class VouchereController extends Controller
{
  public function vouchere()
    {
      return view('admin.vouchere', ['vouchere' =>Vouchere::all()]);
    }
}