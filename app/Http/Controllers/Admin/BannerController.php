<?php

namespace App\Http\Controllers\Admin;


use App\Models\Admin\Banner;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class BannerController extends Controller
{
//	use WithPagination;
//	protected $paginationTheme = 'bootstrap';
	public function bannere()
		{
					return view('admin.bannere', ['bannere' =>Banner::all()->paginate(20) ]);
		}
}