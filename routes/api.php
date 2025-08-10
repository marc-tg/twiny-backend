<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

// Rutas públicas
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

// Rutas protegidas (solo usuarios autenticados)
Route::middleware('auth:sanctum')->group(function () {

    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('likes', LikeController::class);

    // Likes
    Route::get('likes/has/{idUser}/{idPost}', [LikeController::class, 'hasLike']);
    Route::post('likes/{idUser}/{idPost}', [LikeController::class, 'store']);
    Route::delete('likes/{idUser}/{idPost}', [LikeController::class, 'destroy']);

    // Comments
    Route::get('comments/post/{idPost}', [CommentController::class, 'showPostComments']);
});
