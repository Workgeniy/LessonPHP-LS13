<?php

use App\Http\Controllers\ApiLoginController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


// Route::middleware('auth:sanctum')->group(function(){
//     Route::get('post', [PostController::class, 'index']);
// });
    

// Route::post('login', [ApiLoginController::class, 'login'])->name('api_login');


Route::get('post' , [PostController::class, 'index'])->name('post');

Route::post('post/create' , [PostController::class, 'store'])->name('post.store');


Route::get('comment' , [CommentController::class, 'index'])->name('comment');

Route::post('comment/create' , [CommentController::class, 'store'])->name('comment.store');