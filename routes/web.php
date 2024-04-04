<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, "showIndex"])->name('index')->middleware('guest');;
Route::get('/register', [UserController::class, "showRegister"])->middleware('guest');
Route::post('/register', [UserController::class, "register"])->middleware('guest');
Route::post('/login', [UserController::class, "login"])->middleware('guest');
Route::get('/reset-password', [UserController::class, "showReset"])->middleware('guest');
Route::post('/logout', [UserController::class, "logout"])->middleware('auth');

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');
