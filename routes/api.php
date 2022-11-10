<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::prefix('blogs')->group(function(){
    Route::get('all-read', [BlogController::class, 'getAllReadBlog']);
    Route::get('/', [BlogController::class, 'index']);
    Route::get('{blogId}', [BlogController::class,'show']);
    Route::post('/', [BlogController::class,'store']);
    Route::put('{blogId}', [BlogController::class, 'update']);
    Route::delete('{blogId}', [BlogController::class, 'destroy']);
    Route::put('read/{blogId}', [BlogController::class, 'changeStatus']);
});
