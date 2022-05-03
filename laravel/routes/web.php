<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProductController,
    ProductCategoryController,
    UserController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn() => view('welcome'));


Route::prefix('/product-categories')->controller(ProductCategoryController::class)
    ->controller(ProductCategoryController::class)
    ->group(function()  {
        Route::get('/', index);
        Route::get('create', create);
    });