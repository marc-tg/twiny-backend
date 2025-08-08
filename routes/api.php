<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;

    Route::resource('users', 'UserController');
    Route::resource('posts', 'PostController');
    Route::get('likes/{id}', [LikeController::class, 'show']);
