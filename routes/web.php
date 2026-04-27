<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/login', [PageController::class, 'login'])->name('login');

// post
Route::post('/login', [PageController::class, 'store'])->name('login.store');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/logout', [PageController::class, 'logout'])->name('logout');
