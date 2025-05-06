<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dokterspesialis', [DashboardController::class, 'dokterspesialis'])->name('dokterspesialis');

Route::get('/profilrsudam', [DashboardController::class, 'profilrsudam'])->name('profilrsudam');
