<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

    Route::resource('users', 'UserController');
    Route::resource('posts', 'PostController');
    Route::resource('comments', 'CommentController');
    Route::resource('likes', 'LikeController');



    // Likes
    Route::get('likes/has/{idUser}/{idPost}', [LikeController::class, 'hasLike']);
    Route::post('likes/{idUser}/{idPost}', [LikeController::class, 'store']);
    Route::delete('likes/{idUser}/{idPost}', [LikeController::class, 'destroy']);

    //Comments
    Route::get('comments/post/{idPost}', [CommentController::class, 'showPostComments']);