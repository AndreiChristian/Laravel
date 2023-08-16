<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// posts routes
Route::delete('posts/{post}',[PostController::class,'destroy']);
Route::post('posts/{post}',[PostController::class,'update']);
Route::get('posts/{post}',[PostController::class,'edit']);

// create routes
Route::post('/create',[PostController::class,'store']);
Route::get('/create',[PostController::class,'create']);

Route::get('/',[PostController::class,'list']);

