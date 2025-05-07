<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/dokterspesialis', [DashboardController::class, 'dokterspesialis'])->name('dokterspesialis');

Route::get('/profilrsudam', [DashboardController::class, 'profilrsudam'])->name('profilrsudam');

Route::get('/infodarurat', [DashboardController::class, 'infodarurat'])->name('infodarurat');