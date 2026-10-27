<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/about', [PageController::class, 'about'])->name('about');
