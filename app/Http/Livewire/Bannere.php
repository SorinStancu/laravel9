<?php

namespace App\Http\Livewire;

use App\Models\Admin\Banner;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Bannere extends Component
{
    public function render()
    {
//      Cache::forget('bannere');
      $out = Cache::rememberForever('bannere',  function () {
        $langcurrent = Cache::get('lang');
        return Banner::where('id_lang',$langcurrent->id)->get()->paginate(20);
      });

      return view('livewire.bannere', ['bannere' =>$out ]);

    }
}