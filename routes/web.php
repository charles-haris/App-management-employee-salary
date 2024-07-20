<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthentificationController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[AuthentificationController::class,'login'])->name('login');
Route::post('/login',[AuthentificationController::class,'handleLogin'])->name('handlelogin');

// Secured routes
Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[AppController::class,'index'])->name('dashboard');

});
