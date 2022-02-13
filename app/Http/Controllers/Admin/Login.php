<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class Login extends Controller
{
	/*public function __construct()
		{
			$this->middleware('auth');
			$this->middleware('log')->only('index');
			$this->middleware('subscribed')->except('store');
		}*/
/*	public function index(){
		$role=Auth::user()->role;
		if($role=='1'){
			return redirect('home');
		}
	}*/
	public function userLogin(Request $req){
	/*	$role=Auth::user()->role;
		if($role=='1'){
			return redirect('home');
		}*/
		return redirect('home');
	}
}