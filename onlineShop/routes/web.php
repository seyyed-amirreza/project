<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route::group(['prefix'=>'/user'])->group(function () {

//
Route::group(['prefix'=>'/user'],function (){
    Route::get('/create', function () {return view('user.create');});
    Route::controller(userController::class)->group(function(){
        Route::get('/showAll', 'showAll');
        Route::post('/create', 'create');
    });
});

