<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Pagini;
use Illuminate\Http\Request;

class PaginiController extends Controller
{

	public function pagini(Pagini $page)
		{
			return view('admin.pagini', compact('page'));
		}

//	public function createForm(Request $request) {
//		return view('admin.pagini');
//	}
	
	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 * @throws \Illuminate\Validation\ValidationException
	 */
	public function paginiForm(Request $request) {

		$this->validate($request, [
			'name' => 'required'
//			'email' => 'required|email',
		]);
	
		Pagini::create($request->all());

		return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
	}
}