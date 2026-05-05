<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [siteController::class,'index'])->name('site.index');

//login
Route::get('/login', [LoginController::class,'index'])->name('site.login');
Route::post('/login', [LoginController::class,'authenticate'])->name('auth.login');
Route::get('/cadastro', [RegisterController::class,'index'])->name('site.register');
Route::post('/cadastro', [RegisterController::class,'store'])->name('auth.register');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [siteController::class,'dashboard'])->name('site.dashboard');
    Route::post('/logout', [LoginController::class,'logout'])->name('auth.logout');
});
