<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/profilrsudam', [DashboardController::class, 'profilrsudam'])->name('profilrsudam');

Route::get('/layananunggulan', [DashboardController::class, 'layananunggulan'])->name('layananunggulan');

Route::get('/dokterspesialis', [DashboardController::class, 'dokterspesialis'])->name('dokterspesialis');

Route::get('/fasilitasrsudam', [DashboardController::class, 'fasilitasrsudam'])->name('fasilitasrsudam');

Route::get('/pendaftaranonline', [DashboardController::class, 'pendaftaranonline'])->name('pendaftaranonline'); 

Route::get('/infodarurat', [DashboardController::class, 'infodarurat'])->name('infodarurat');

Route::get('/testimonipasien', [DashboardController::class, 'testimonipasien'])->name('testimonipasien');

Route::get('/petakontak', [DashboardController::class, 'petakontak'])->name('petakontak');
