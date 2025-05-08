<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimoniController;
use App\http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');



Route::get('/profilrsudam', [DashboardController::class, 'profilrsudam'])->name('profilrsudam');

Route::get('/layananunggulan', [DashboardController::class, 'layananunggulan'])->name('layananunggulan');

Route::get('/dokterspesialis', [DashboardController::class, 'dokterspesialis'])->name('dokterspesialis');

Route::get('/fasilitasrsudam', [DashboardController::class, 'fasilitasrsudam'])->name('fasilitasrsudam');

Route::get('/pendaftaranonline', [DashboardController::class, 'pendaftaranonline'])->name('pendaftaranonline');

Route::get('/infodarurat', [DashboardController::class, 'infodarurat'])->name('infodarurat');

Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');

Route::get('/petakontak', [DashboardController::class, 'petakontak'])->name('petakontak');

Route::get('/infodarurat', [DashboardController::class, 'infodarurat'])->name('infodarurat');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['superadmin']], function () {
        
    });

    Route::group(['middleware' => ['admin']], function () {

    });
});
