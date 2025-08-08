<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::prefix('v1')->group(function () {
    Route::resource('users', 'Api\v1\UserController');

});
