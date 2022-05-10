<?php

use App\Http\Controllers\AboutControlller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\GalleryControlller;
use App\Http\Controllers\MenuControlller;
use App\Http\Controllers\ReservationControlller;
use App\Http\Controllers\StuffControlller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('menus', [MenuControlller::class, 'index'])->name('food.menu');

Route::get('abouts', [AboutControlller::class, 'index'])->name('food.about');

Route::get('reservation', [ReservationControlller::class, 'index'])->name('food.reservation');

Route::get('stuff', [StuffControlller::class, 'index'])->name('food.stuff');

Route::get('gallery', [GalleryControlller::class, 'index'])->name('food.gallery');

Route::get('blog', [BlogController::class, 'index'])->name('food.blog');

Route::get('blog-details/{post}', [BlogController::class, 'show'])->name('food.blog-details');

Route::get('category/{category}', [DetailsController::class, 'category'])->name('food.category');

Route::get('tag/{tag}', [DetailsController::class, 'tag'])->name('food.tag');

Route::get('contact', [ContactController::class, 'index'])->name('food.contact');
