<?php

use Illuminate\Support\Facades\Route;

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


Route::prefix('/shop_car')->group(function (){
    Route::get('/',[\App\Http\Controllers\ShopContrller::class,'index'])->name('list');
    Route::get('/create', [\App\Http\Controllers\ShopContrller::class, 'create'])->name('create');
    Route::post('/create', [\App\Http\Controllers\ShopContrller::class, 'store'])->name('store');
    Route::get('/delete/{id}',[\App\Http\Controllers\ShopContrller::class,'destroy'])->name('delete');
    Route::get('/update/{id}', [\App\Http\Controllers\ShopContrller::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [\App\Http\Controllers\ShopContrller::class, 'update'])->name('update');
    Route::post('/search',[\App\Http\Controllers\ShopContrller::class,'search'])->name('search');
});
