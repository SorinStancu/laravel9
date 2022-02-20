<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Order;
use App\Models\Admin\Status;

class OrderController extends Controller
{


	public function comenzi()
		{

			$order =
				Order::where('idu', '>','0' )
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

			 $statusuri = Status::where('tip','com')->get();

//		 dd($order);
			return view('admin.orders', compact('order', 'statusuri'));
		}
}