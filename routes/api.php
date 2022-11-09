<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::prefix('blogs')->group(function(){
    Route::get('/', [BlogController::class, 'index']);
    Route::get('{blogId}', [BlogController::class,'show']);
    Route::get('readonly', [BlogController::class, 'getReadBlog']);
    Route::post('/', [BlogController::class,'store']);
    Route::put('{blogId}', [BlogController::class, 'update']);
    Route::delete('{blogId}', [BlogController::class, 'destroy']);
});
