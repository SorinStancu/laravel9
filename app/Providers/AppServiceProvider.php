<?php

namespace App\Providers;

use App\Models\Admin\Pagini;
use App\Models\Admin\Language;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
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
		   
		   
//		    $lang = Language::first();
//		    $langs = Language::all();
//		    $view->with('langs', $langs );
//		    $view->with('lang', $lang );
//		    $view->with('currentLang', $lang);
//		   session()->put('lang', $lang);
//				app()->setLocale($lang);
		   
			  $setari = DB::table('admin')->first();
			  $setariuser = DB::table('designadm')->first();
//		    $setari =array();
//		    $setariuser =array();
				$setari->avatar = $setariuser->avatar;
				$setari->post = $setariuser->post;
				$setari->style_site = $setariuser->style_site;
				$setari->style_admin = $setariuser->style_admin;
				
		    $pagini = Pagini::where('id_lang', '1')
			    ->where('name','!=','Login')
			    ->where('name','!=','News')
			    ->where('name','!=','Samples')
			    ->where('loc','!=','landing')
			    ->where('id_lang','1')
			    ->get();
		    $view->with('pagini', $pagini );
		    $view->with('setari', $setari );
	    });
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