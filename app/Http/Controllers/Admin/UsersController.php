<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Users;
use Illuminate\Support\Facades\Cache;

class UsersController extends Controller
{
	public function clienti()
		{

      if (Cache::has('users'))
      {
        $out = Cache::get('users');
      }
      else
      {
        Users::get()->lazy()->each(function ($users) use(&$out) {
          $out[] = $users;
        });
        $out = json_encode($out);
        Cache::put('users', $out);
      }

      $nrusers = Cache::rememberForever('nr_users', function () {
        return Users::count();
      });
      $nruserscont = Cache::rememberForever('nr_users_cont', function () {
        return Users::whereNotNull('parola')->count();
      });
      $nrusersfcont = Cache::rememberForever('nr_users_fcont', function () {
        return Users::whereNull('parola')->count();
      });

return view('admin.users', [
  'users' => $out,
  'nrusers' => $nrusers,
  'nruserscont' => $nruserscont,
  'nrusersfcont' => $nrusersfcont
  ]);

		}

}