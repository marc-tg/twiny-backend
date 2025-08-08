<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;


    Route::resource('users', 'UserController');
    Route::resource('posts', 'PostController');
    Route::get('posts/{id}', [PostController::class, 'show']);
