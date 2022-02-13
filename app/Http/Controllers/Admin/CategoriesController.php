<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Categories;


class CategoriesController extends Controller
{

	public function categorii( )
		{
		$categorii = Categories::orderBy('poz','asc')
				->where('id_lang','1')
				->where('lvl','1')
			 ->with(['subcategorii' => function ($q)  {
				 $q->orderBy('poz', 'asc')
				 ->where('lvl', '2')
				 ->where('id_lang', '1')
					 ->with(['subsubcategorii' => function ($qq)  {
						 $qq->orderBy('poz', 'asc')
							 ->where('lvl', '3')
							 ->where('id_lang', '1')
						 ; }])
				 ; }])
				->get();

			return view('admin.categories', ['categorii' =>$categorii]);
		}
}