<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::post('/post', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
