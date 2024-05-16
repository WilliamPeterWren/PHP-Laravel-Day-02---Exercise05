<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index');
});

Route::get('/email', [PostController::class,'displayEmail']);
Route::get('/face', [PostController::class,'displayFace']);