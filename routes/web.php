<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
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
//-----------Landing Page-------------

Route::get('/', [UserController::class, 'login']);
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::get('/register', [UserController::class, 'create']);
Route::get('/thankyou', [UserController::class, 'thanks']);

Route::get('/logout', [LoginController::class, 'logout']);
//-----------Nav Bar---------------------------------------
Route::get('/enrollment', [FrontController::class, 'enrollment']);//->middleware('auth.basic');
Route::get('/home', [FrontController::class, 'home']);//->middleware('auth.basic');
Route::get('/profile', [FrontController::class, 'profile']);//->middleware('auth.basic');
Route::get('/stats', [FrontController::class, 'stats']);//->middleware('auth.basic');

//---------- Testing Users working---------------------------------------
Route::resource('user', UserController::class);
Route::get('/users', [UserController::class, 'show_all']);








