<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FullNameController;

Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/products',[ProductController::class, 'showProducts'])->name('all-products');
Route::get('/product-details/{id}',[ProductController::class, 'productDetails'])->name('product-details');
Route::get('/full-name',[FullNameController::class, 'FullName'])->name('full-name-form');
Route::post('/get-full-name',[FullNameController::class, 'getFullName'])->name('get-full-name');
