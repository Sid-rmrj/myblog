<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);

Route::get('/post/{id}', [PostController::class, 'detail'])-> where('id', '[0-9]+')-> name('post.detail');

Route::get('/old-url',[PostController::class,'oldUrl']);

Route::get('/new-something-url',[PostController::class,'newUrl'])-> name('new_url');