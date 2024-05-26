<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

//dasd

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/{id}', [ProfileController::class, 'show']);
// Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
Route::post('/profile/add', [ProfileController::class, 'store'])->name('profiles.store');

Route::get('/blogs',[BlogController::class, 'index']);
Route::get('/blogs/{id}', [BlogController::class, 'show']);
Route::get('/users/{id}/blogs', [BlogController::class, 'getUserBlogs']);
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::post('/blogs/return', [BlogController::class, 'return'])->name('blogs.return');

Route::post('/login', [AuthController::class, 'login'])->name('profiles.login');
