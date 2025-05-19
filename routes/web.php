<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
