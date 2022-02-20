<?php

namespace App\Providers;

use App\Models\Admin\Pagini;
use App\Models\Admin\Language;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

	    View::composer('*', function ($view) {

        $lang = Cache::rememberForever('lang',  function () {
          return Language::first();
        });

        $langs = Cache::rememberForever('langs',  function () {
          return Language::all();
        });

        $setari = Cache::rememberForever('setari',  function () {
          return DB::table('admin')->first();
        });
        $setariuser = Cache::rememberForever('setariuser',  function () {
          return DB::table('designadm')->first();
        });

				$setari->avatar = $setariuser->avatar;
				$setari->post = $setariuser->post;
				$setari->style_site = $setariuser->style_site;
				$setari->style_admin = $setariuser->style_admin;

        $pagini = Cache::rememberForever('pagini',  function () {
          return  Pagini::where('id_lang', '1')
            ->where('name','!=','Login')
            ->where('name','!=','News')
            ->where('name','!=','Samples')
            ->where('loc','!=','landing')
            ->get();
        });

		    $view->with('pagini', $pagini );
		    $view->with('setari', $setari );
        $view->with('langs', $langs );
        $view->with('lang', $lang );
	    });
      Paginator::useBootstrap();
    }
}
if (!Collection::hasMacro('paginate')) {
	Collection::macro('paginate',
		function ($perPage = 15, $page = null, $options = []) {
			$page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
			return (new LengthAwarePaginator(
				$this->forPage($page, $perPage), $this->count(), $perPage, $page, $options))
				->withPath('');
		});
}