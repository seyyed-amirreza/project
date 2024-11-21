<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product',[\App\Http\Controllers\productController::class]);
Route::get('/category',[\App\Http\Controllers\categoryController::class]);
Route::get('/comment',[\App\Http\Controllers\commentController::class]);
Route::get('/customer',[\App\Http\Controllers\customerController::class]);
Route::get('/factor',[\App\Http\Controllers\factorController::class]);
Route::get('/like',[\App\Http\Controllers\likeController::class]);
Route::get('/payment',[\App\Http\Controllers\paymentController::class]);
Route::get('/user',[\App\Http\Controllers\usersController::class]);

