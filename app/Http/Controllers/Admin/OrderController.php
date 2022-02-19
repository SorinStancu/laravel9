<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Order;
use App\Models\Admin\Status;

class OrderController extends Controller
{


	public function comenzi()
		{

			$order =
				order::where('idu', '>','0' )
				->with('cos')
//				->withSum('cos','pret')
				->with('users')
				->with('factura')
				->with('adresa')
				->with('status')
				->limit(100)
				->orderBy('data','desc')
				->get()
				->paginate(50)
				->groupby('data');

			 $statusuri = Status::all()
				 ->where('tip','com');

//		 dd($statusuri);
			return view('admin.orders', compact('order', 'statusuri'));
		}
}