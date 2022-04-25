<?php

use Illuminate\Support\Facades\Route;
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

Route::view('/','login');

Route::get('/login', function () {
    return view('auth/login');
});


Route::get('/enrollment', function () {
    return view('enrollment');
});

Route::resource('user', UserController::class);
Route::get('/users', [UserController::class, 'show_all']);

Route::get('/login', [UserController::class, 'login']);



