<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [siteController::class,'index']);

//login
Route::get('/login', [LoginController::class,'index']);
