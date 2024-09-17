<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SaucerController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserOrderController;
use App\Http\Controllers\Admin\ViewController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('posts', PostController::class)->except('show')->names('admin.posts');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('tags', TagController::class)->except('show')->names('admin.tags');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('saucers', SaucerController::class)->names('admin.saucers');

Route::resource('UserOrder', UserOrderController::class)->names('admin.order');

Route::resource('views', ViewController::class)->names('admin.views');

Route::post('/admin/order/{id}/status', [UserOrderController::class, 'changeStatus'])->name('admin.order.status');
