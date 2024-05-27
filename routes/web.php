<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/post/{id}', [PostController::class, 'show']);
require __DIR__.'/auth.php';
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth')->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->middleware('auth')->name('posts.store');

Route::get('/categories/create', [CategoryController::class, 'create'])->middleware('auth')->name('categories.create');
Route::get('/categories/index', [CategoryController::class, 'index'])->middleware('auth')->name('categories.index');
Route::post('/categories/store', [CategoryController::class, 'store'])->middleware('auth')->name('categories.store');
Route::get('/categories/show', [CategoryController::class, 'show'])->middleware('auth')->name('categories.show');
Route::get('/categories/edit', [CategoryController::class, 'edit'])->middleware('auth')->name('categories.edit');
Route::get('/categories/update', [CategoryController::class, 'update'])->middleware('auth')->name('categories.update');

Route::get('/categories/destroy', [CategoryController::class, 'destroy'])->middleware('auth')->name('categories.destroy');
