<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::controller(userController::class)->group(function () {
   Route::get('/index', 'showAll');
   Route::post('/create', 'create');
});

