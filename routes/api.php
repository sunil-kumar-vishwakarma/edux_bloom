<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::post('/student/login', [LoginController::class, 'login']);

Route::post('/student/register', [RegisterController::class, 'register']);


// Login API
Route::post('/login', [AuthController::class, 'login']);
// Route::post('/login', [AuthController::class, 'login'])->withoutMiddleware('auth');


// Logout API
Route::post('/logout', [AuthController::class, 'logout']);

