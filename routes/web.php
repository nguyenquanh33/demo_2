<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, "index"]);

Route::get('/product-list', [ProductController::class, "getAll"]);

Route::get('/product-list2', [ProductController::class, "getAll2"]);

Route::get('welcome', [ProductController::class, "getAll3"]);

Route::get('/product-delete/{id}', [ProductController::class, "delete"]);

Route::get('/product-add', [ProductController::class, "add"]);

Route::post('/product-save', [ProductController::class, "save"]);

Route::get('/product-edit/{id}', [ProductController::class, "edit"]);

Route::post('/product-update', [ProductController::class, "update"]);

Route::get('/category-list', [CategoryController::class, "getAll"]);

Route::get('/category-delete/{id}', [CategoryController::class, "delete"]);

Route::get('/category-add', [CategoryController::class, "add"]);

Route::post('/category-save', [CategoryController::class, "save"]);

Route::get('/category-edit/{id}', [CategoryController::class, "edit"]);

Route::post('/category-update', [CategoryController::class, "update"]);
