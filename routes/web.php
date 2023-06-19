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

Route::view('/reset', 'auth.passwords.reset')->name('password.reset');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//FORMULARIO DE POST
Route::get('/posts', [App\Http\Controllers\PostsController::class, 'index'])->name('posts');
Route::get('/post-create', [App\Http\Controllers\PostsController::class, 'create'])->name('post.create');
Route::post('/post-save', [App\Http\Controllers\PostsController::class, 'save'])->name('post.save');
Route::get('/post-edit/{id}', [App\Http\Controllers\PostsController::class, 'edit'])->name('post.edit');
Route::put('post-update/{id}', [App\Http\Controllers\PostsController::class, 'update'])->name('post.update');
Route::delete('/post-delete/{id}', [App\Http\Controllers\PostsController::class, 'delete'])->name('post.delete');

//FORMULARIO DE USUARIOS
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users');
Route::get('/user-create', [App\Http\Controllers\UsersController::class, 'create'])->name('user.create');
Route::post('/user-save', [App\Http\Controllers\UsersController::class, 'save'])->name('user.save');
Route::get('/user-edit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])->name('user.edit');
Route::put('user-update/{id}', [App\Http\Controllers\UsersController::class, 'update'])->name('user.update');
Route::delete('/user-delete/{id}', [App\Http\Controllers\UsersController::class, 'delete'])->name('user.delete');


//PROFILE EDIT
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::put('profile-update/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
