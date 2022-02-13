<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Product;
use Livewire\WithPagination;

class ProductController extends Controller
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';
	public function produse()
		{
			$produse= Product::with('manufacturers')->limit(100)->get()->paginate(20);
//        dd($produse);
			return view('admin.products', ['produse' => $produse]);
			
		}
}