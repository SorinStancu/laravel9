<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Filtre;
use Illuminate\Http\Request;

class FiltreController extends Controller
{
  public function filtre()
    {

      $filtre= Filtre::get()->paginate(20);

      return view('admin.filtre',
                  ['filtre' => $filtre]
      );
    }
}