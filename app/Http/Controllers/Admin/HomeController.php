<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Order;
use App\Models\Admin\Product;
use App\Models\Admin\Users;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
   public function statistici(){
	   $statistici_prod=array();
	   $statistici_trafic=array();
	   $statistici_com=array();



     $statistici_prod['produse'] = Cache::rememberForever('nr_prod', function () {
       return Product::where('id_lang','1')->count();
     });

     $statistici_prod['clienti'] = Cache::rememberForever('nr_users', function () {
       return Users::count();
     });

     $statistici_com['luna_trecuta'] = Cache::rememberForever('com_lt', function () {
       $luna_trecuta_inceput = date('Y-m', strtotime('-1 month'));
       $luna_trecuta_inceput .= '-01';
       $luna_trecuta_final = date('Y-m-t', strtotime('-1 month'));

       return Order::whereDate('data','>', $luna_trecuta_inceput)
         ->whereDate('data','<=', $luna_trecuta_final)
         ->sum('suma');
     });

//          dd($statistici_com);
     $statistici_com['luna_curenta'] = Cache::rememberForever('com_lc', function () {
       $luna_curenta_inceput = date('Y-m'.'-01');
       $luna_curenta_final = date('Y-m-d');
       return Order::whereDate('data','>', $luna_curenta_inceput)
         ->whereDate('data','<=', $luna_curenta_final)
         ->sum('suma');
     });
//     Cache::flush();

		 $statistici_trafic[] = '1';

	   return view('admin.home',
                 compact('statistici_prod',
                         'statistici_trafic',
                         'statistici_com'
                 ));

   }
}