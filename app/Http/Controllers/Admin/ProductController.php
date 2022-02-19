<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Product;
use Livewire\WithPagination;

class ProductController extends Controller
{
  public function index() {
    $products = Product::with('manufacturers')->limit(10)->get()->toArray();
    return array_reverse($products);
  }
	public function produse()
		{
			$produse= Product::with('manufacturers')->limit(100)->get()->paginate(20);
			return view('admin.products', ['produse' => $produse]);

		}
  public function add_prod()
    {

      return view('admin.add_prod');

    }
}