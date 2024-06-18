<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'index'])->name('storage');
Route::get('/home', [ProductController::class, 'home'])->name('home');
Route::get('/add', [ProductController::class, 'create'])->name('add_product');
Route::post('/store', [ProductController::class, 'store'])->name('store_product');
