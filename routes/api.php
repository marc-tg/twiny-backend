<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;

    Route::resource('users', 'UserController');
    Route::resource('posts', 'PostController');
    
// routes/api.php
Route::get('likes/has/{idUser}/{idPost}', [LikeController::class, 'hasLike']);
    
    Route::resource('likes', 'LikeController');
