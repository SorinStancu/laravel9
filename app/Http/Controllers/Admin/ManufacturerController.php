<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
	public function producatori()
		{
			
			return view('admin.producatori', ['producatori' => Manufacturer::limit(1000)->get()]);
			
		}
}