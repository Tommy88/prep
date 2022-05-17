<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

//Route::get('/form', [PostController::class, 'form']);
//Route::post('/result', [PostController::class, 'result']);

Route::match(['get', 'post'], '/form', [PostController::class, 'form']);

Route::get('/post/', [PostController::class, 'show']);
Route::get('/user/', [UserController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});
