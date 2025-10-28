<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Home Page
Route::get('/', [UserController::class, 'home']);

// Register
Route::get('/register', [UserController::class, 'showRegisterForm']);
Route::post('/register', [UserController::class, 'register']);

// Update
Route::get('/update', [UserController::class, 'showUpdateForm']);
Route::post('/update', [UserController::class, 'update']);

// Show all users
Route::get('/show', [UserController::class, 'showUsers']);

// Search
Route::get('/search', [UserController::class, 'searchForm']);
Route::post('/search', [UserController::class, 'searchUser']);

// Delete
Route::get('/delete', [UserController::class, 'searchDelete']);
Route::post('/delete', [UserController::class, 'deleteUser']);

// Login

Route::get('/login', [UserController::class, 'loginForm']);
Route::post('/login', [UserController::class, 'login']);