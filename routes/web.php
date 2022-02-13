<?php

	use App\Http\Controllers\Admin\BannerController;
	use App\Http\Controllers\Admin\CategoriesController;
	use App\Http\Controllers\Admin\HomeController;
	use App\Http\Controllers\Admin\ManufacturerController;
	use App\Http\Controllers\Admin\OrderController;
	use App\Http\Controllers\Admin\PaginiController;
	use App\Http\Controllers\Admin\UsersController;
	use App\Http\Controllers\Admin\ProductController;
	use Illuminate\Support\Facades\Route;


//Route::group(['middleware'=>['protectedPage']], function(){
//	Route::post('/login',[Login::class,'userLogin']);
//});

Route::prefix('admin')->group(function () {

Route::get('/', function(){
  return view('admin.index');
})->name('login');



Route::get('/home', [HomeController::class, 'statistici'])->name('home');

Route::get('/users', [UsersController::class, 'clienti']);

Route::get('/products', [ProductController::class, 'produse'])->name('produse');

Route::get('/orders', [OrderController::class, 'comenzi'])->name('orders');

Route::get('/bannere', [BannerController::class, 'bannere'])->name('bannere');

Route::get('/producatori', [ManufacturerController::class, 'producatori'])->name('producatori');

Route::get('/categories', [CategoriesController::class, 'categorii'])->name('categorii');

Route::get('{page}', [PaginiController::class, 'pagini'])->name('page');
//Route::post('/{page}', [PaginiController::class, 'paginiForm'])->name('page');

});