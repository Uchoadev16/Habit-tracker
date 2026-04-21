<?php

use App\Http\Controllers\SieController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [SieController::class,'index']);
