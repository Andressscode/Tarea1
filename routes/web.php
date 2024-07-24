<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('categories', CategoryController::class);
Route::resource('movies', MovieController::class);
