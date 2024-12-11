<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/connexion',[AuthController::class,'pageconnexion'])->name('connexion');
Route::post('/connexion/login', [AuthController::class, 'login'])->name('connexion.login');
Route::post('/connexion/register', [AuthController::class, 'register'])->name('connexion.register');
Route::post('/deconnexion', [AuthController::class, 'logout'])->name('deconnexion');