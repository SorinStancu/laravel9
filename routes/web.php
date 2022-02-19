<?php


  use App\Http\Controllers\Admin\ArticlesBlogController;

  use App\Http\Controllers\Admin\ArticlesController;

  use App\Http\Controllers\Admin\BannerController;

  use App\Http\Controllers\Admin\CategoriesBlogController;

  use App\Http\Controllers\Admin\CategoriesController;

  use App\Http\Controllers\Admin\ComentBlogController;

  use App\Http\Controllers\Admin\EditareProdusController;

  use App\Http\Controllers\Admin\FiltreController;

  use App\Http\Controllers\Admin\HomeController;

  use App\Http\Controllers\Admin\ManufacturerController;

  use App\Http\Controllers\Admin\OrderController;

  use App\Http\Controllers\Admin\PaginiController;

  use App\Http\Controllers\Admin\StatusController;

  use App\Http\Controllers\Admin\VouchereController;

//  use App\Http\Controllers\Api\PaginiController;

  use App\Http\Controllers\Admin\ReviewController;

  use App\Http\Controllers\Admin\UsersController;

  use App\Http\Controllers\Admin\ProductController;

  use App\Http\Middleware\LoginAdmin;

  use Illuminate\Support\Facades\Route;

  use App\Http\Controllers\Admin\Controller;



  Route::prefix('admin')->group(function () {


    Route::get('/login', function(){

      return view('dashboard');

    })->name('index');

//    Route::post('/login',[LoginAdmin::class,'handle'])->name('login');

    Route::get('/home', [HomeController::class, 'statistici'])->name('home');

    Route::get('/users', [UsersController::class, 'clienti'])->name('users');

    Route::get('/review', [ReviewController::class, 'reviews'])->name('review');

    Route::get('/products', [ProductController::class, 'produse'])->name('produse');

    Route::get('/add_prod', [ProductController::class, 'add_prod'])->name('add_prod');

    Route::get('/edit_prod/{id}', [EditareProdusController::class, 'edit_prod'])->name('edit_prod');

    Route::get('/orders', [OrderController::class, 'comenzi'])->name('orders');

    Route::get('/statusuri', [StatusController::class, 'statusuri'])->name('statusuri');

    Route::get('/bannere', [BannerController::class, 'bannere'])->name('bannere');

    Route::get('/galeriefoto', [BannerController::class, 'bannere'])->name('galeriefoto');

    Route::get('/news', [ArticlesController::class, 'news'])->name('news');

    Route::get('/producatori', [ManufacturerController::class, 'producatori'])->name('producatori');

    Route::get('/categories', [CategoriesController::class, 'categorii'])->name('categorii');

    Route::get('/filtre', [FiltreController::class, 'filtre'])->name('filtre');

    Route::get('/categoriesblog', [CategoriesBlogController::class, 'catblog'])->name('catblog');

    Route::get('/articlesblog', [ArticlesBlogController::class, 'artblog'])->name('artblog');

    Route::get('/comentblog', [ComentBlogController::class, 'comblog'])->name('comblog');

    Route::get('/vouchere', [VouchereController::class, 'vouchere'])->name('vouchere');

    Route::get('/setari', [ArticlesController::class, 'news'])->name('setari');
    Route::get('/useri', [ArticlesController::class, 'news'])->name('useri');
    Route::get('/mentenanta', [ArticlesController::class, 'news'])->name('mentenanta');

    Route::get('{link}', [PaginiController::class, 'pagini'])->name('page');
    Route::get('/add_pag', [PaginiController::class, 'pagini'])->name('add_pag');

//Route::apiResource('pagini', PaginiController::class);

//Route::post('/{page}', [PaginiController::class, 'paginiForm'])->name('page');


  });

//Route::get('/', function () {
//    return view('dashboard');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//  Route::view('/{any}', 'dashboard')
//    ->middleware(['auth'])
//    ->where('any', '.*');

  Route::get('{any}', function () {
    return view('layout.app');
  })->where('any', '.*');

require __DIR__.'/auth.php';