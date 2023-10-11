<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');
Route::resource('/gudang', GudangController::class)->middleware('auth');
