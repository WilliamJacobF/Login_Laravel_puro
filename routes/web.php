<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/Home', [HomeController::class, 'index']) -> name('Home');
Route::get('/', [LoginController::class, 'index']) -> name('login-index');
Route::post('/', [LoginController::class, 'store']) -> name('login-store');
Route::get('/logout', [LoginController::class, 'destroy']) -> name('login-destroy');