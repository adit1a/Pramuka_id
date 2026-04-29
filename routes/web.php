<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('beranda');
})->middleware('auth');

Route::get('/form', function () {
    return view('form');
});

Route::get('/login', function(){
    return view('login');
})->name('login');
Route::get('/register', function(){
    return view('register');
})->name('register');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister']);
Route::get('/verify', [AuthController::class, 'showVerify'])->name('verify.page');
Route::post('/verify', [AuthController::class, 'processVerify']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');