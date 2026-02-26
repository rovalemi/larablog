<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

Route::prefix('admin')
    ->middleware(['auth', 'can:admin'])
    ->group(function () {

        Route::get('/posts', [AdminPostController::class, 'index'])->name('admin.posts.index');
        Route::delete('/posts/{post}', [AdminPostController::class, 'destroy'])->name('admin.posts.destroy');

        Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users.index');
        Route::delete('/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
    });
