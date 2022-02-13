<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Product;
use App\Models\Admin\Users;
use Illuminate\Http\Request;
//use Illuminate\Http\Support\Facades\Auth;

class HomeController extends Controller
{
   public function statistici(){
	   $statistici_prod=array();
	   $statistici_trafic=array();
	   $statistici_com=array();
		 
		 $statistici_prod['produse'] = Product::where('id_lang','1')->count();
	   $statistici_prod['clienti'] = Users::count();
		 
		 $statistici_trafic[] = '1';
		 $statistici_com[] = '1';
//		        dd($statistici_prod);
	   return view('admin.home', compact('statistici_prod', 'statistici_trafic', 'statistici_com'));
//     $role=Auth::user()->role;
//     if($role=='1'){
//       return view(admin.home);
//     }
   }
}