<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
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

Route::view('/','login');

Route::get('/login', function () {
    return view('auth/login');
});


Route::get('/enrollment', [FrontController::class, 'enrollment']);

Route::resource('user', UserController::class);
Route::get('/users', [UserController::class, 'show_all']);

Route::get('/login', [UserController::class, 'login']);

Route::get('/home', [FrontController::class, 'home']);
Route::get('/profile', [FrontController::class, 'profile']);
Route::get('/stats', [FrontController::class, 'stats']);




