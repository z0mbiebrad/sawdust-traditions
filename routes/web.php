<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
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

// Home
Route::get('/', [PostController::class, 'index']);

// Gallery
Route::get('gallery', [PostController::class, 'gallery']);

// Gallery Admin
Route::get('gallery/admin', [AdminController::class, 'index']);
Route::post('gallery/admin', [AdminController::class, 'store']);


Route::get('gallery/{product:slug}', [PostController::class, 'product']);

Route::get('gallery/category/{category:slug}', [PostController::class, 'categories'])->name('categories');

Route::get('/contact', function() {
    return view('home.contact');
}
);

