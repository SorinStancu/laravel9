<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Users;

class UsersController extends Controller
{
	public function clienti()
		{

		return view('admin.users', ['users' => Users::limit(10)->get()]);

		}

}