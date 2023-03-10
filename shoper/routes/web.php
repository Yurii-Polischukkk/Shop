<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Auth::routes([
    'reset'=>false,
    'confirm'=>false,
    'verify'=>false,
]);
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('get-logout');
Route::group(['middleware'=>'auth', 'prefix'=>'admin'], function (){

    Route::group(['middleware'=>'is_admin'], function (){
        Route::get('/orders', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });
    Route::resource('categories', CategoryController::class);
    Route::resource('products', \App\Http\Controllers\ProductController::class);
});
Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('index');


Route::get('/categories', [\App\Http\Controllers\MainController::class, 'categories'])->name('categories');
Route::get('/basket', [\App\Http\Controllers\BasketController::class, 'basket'])->name('basket');
Route::get('/basket/place', [\App\Http\Controllers\BasketController::class, 'basketPlace'])->name('basket-place');
Route::post('/basket/add/{id}', [\App\Http\Controllers\BasketController::class, 'basketAdd'])->name('basket-add');
Route::post('/basket/remove/{id}', [\App\Http\Controllers\BasketController::class, 'basketRemove'])->name('basket-remove');
Route::post('/basket/place', [\App\Http\Controllers\BasketController::class, 'basketConfirm'])->name('basket-confirm');


Route::get('/{category}', [\App\Http\Controllers\MainController::class, 'category'])->name('category');

Route::get('/{category}/{product?}', [\App\Http\Controllers\MainController::class, 'product'])->name('product');






