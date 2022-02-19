<?php

namespace App\Http\Controllers\Admin;


use App\Models\Admin\Banner;
use Illuminate\Support\Facades\Cache;


class BannerController extends Controller
{

	public function bannere()
		{
      Cache::forget('bannere');
      $out = Cache::rememberForever('bannere',  function () {
        $langcurrent = Cache::get('lang');
        return Banner::where('id_lang',$langcurrent->id)->get()->paginate(20);
      });
			return view('admin.bannere', ['bannere' =>$out ]);
		}
}