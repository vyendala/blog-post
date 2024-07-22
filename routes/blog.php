<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name("index");
Route::get('/posts', [PostController::class, 'posts'])->middleware("auth")->name("posts");

Route::get('/posts/create', [PostController::class, 'create'])->middleware("auth")->name("create");
Route::post('/posts/create', [PostController::class, 'store'])->middleware("auth")->name("store");

Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->middleware("auth")->name("edit");
Route::put('/posts/edit/{id}', [PostController::class, 'update'])->middleware("auth")->name("update");

Route::delete('/posts/destroy/{id}', [PostController::class, 'destroy'])->middleware("auth")->name("destroy");

Route::get('/posts/post/{id}', [PostController::class, 'show'])->middleware("auth")->name("show");