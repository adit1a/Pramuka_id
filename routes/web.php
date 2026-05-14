<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ActivityController;
use App\Models\Anggota;
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

Route::get('/contactUs', function(){
    return view('contactUs');
});


Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister']);
Route::get('/verify', [AuthController::class, 'showVerify'])->name('verify.page');
Route::post('/verify', [AuthController::class, 'processVerify']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/form', function (){
    return view('form');
});

Route::post('/simpan-anggota', [AnggotaController::class, 'store']);

Route::get('/', function(){
    $anggota = Anggota::first();
    return view('beranda', compact('anggota'));
});

Route::get('/edit-anggota/{id}', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::put('/update-anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');

Route::get('/achievement', [ActivityController::class, 'index']);
Route::post('/process-scan', [ActivityController::class, 'processScan'])->name('process.scan');