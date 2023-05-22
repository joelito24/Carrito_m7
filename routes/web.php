<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group([
    'prefix'     => 'api',
], function () {
    include('api.php');

});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//FORMULARIO DE POST
Route::get('/posts', [App\Http\Controllers\PostsController::class, 'index'])->name('posts');
Route::get('/post-create', [App\Http\Controllers\PostsController::class, 'create'])->name('post.create');
Route::post('/post-save', [App\Http\Controllers\PostsController::class, 'save'])->name('post.save');
