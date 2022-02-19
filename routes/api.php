<?php

  use App\Http\Controllers\Admin\ProductController;
  use App\Http\Controllers\Admin\UsersController;
  use App\Http\Controllers\Api\UserssController;
  use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



  Route::middleware('api')->group(function () {
    Route::resource('admin.userss', UserssController::class);
  });

  Route::apiResource('userss', UserssController::class);