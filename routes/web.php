<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterContoller;
use App\Http\Controllers\Admin\AdminContoller;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/register',[LoginRegisterController::class,'register'])->name('register');
    Route::get('/store',[LoginRegisterController::class,'store'])->name('store');
    Route::get('/login ',[LoginRegisterController::class,'login'])->name('login');
    Route::get('/authenticate',[LoginRegisterController::class,'authenticate'])->name('authenticate');
});

Route::Middleware('auth','admin')->group(function () {
    Route::get('admin/dashboard', [Adminroller::class,'index'])('admin/dashboard');
    Route::get('logout', [LoginRegisterController::class,'logout'])('logout');

});
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


