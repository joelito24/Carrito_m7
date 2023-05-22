<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



//PRODUCTOS
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('/products/create', [App\Http\Controllers\ProductsController::class, 'create'])->name('products.create');
Route::put('/products/create', [App\Http\Controllers\ProductsController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [App\Http\Controllers\ProductsController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [App\Http\Controllers\ProductsController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])->name('products.destroy');

//CARRITO
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/cart/{id}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.save');
Route::post('/cart/delete/{id}', [App\Http\Controllers\CartController::class, 'removeFromCart'])->name('cart.remove');
