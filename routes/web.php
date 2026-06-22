<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentoController;
use App\Http\Controllers\LikeController;





Route::middleware('auth')->group(function () {

    Route::get('/posts', [PostController::class, 'index'])
        ->name('posts.index');

    Route::get('/posts/create', [PostController::class, 'create'])
        ->name('posts.create');

    Route::post('/posts', [PostController::class, 'store'])
        ->name('posts.store');

    Route::post('/commenti', [CommentoController::class, 'store'])
        ->name('commenti.store');
});

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('posts.index');
    }
    return redirect()->route('login');
});



Route::post('/posts/{post}/like', [LikeController::class, 'toggle'])->name('posts.like');